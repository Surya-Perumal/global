$files = @('toefl.php', 'sat.php', 'pte.php', 'oet.php', 'gre.php', 'ielts.php', 'gmat.php', 'german.php', 'french.php', 'duolingo.php')

foreach ($f in $files) {
    if (Test-Path $f) {
        $content = Get-Content $f -Raw
        $idx_faq = $content.IndexOf('<!-- FAQs -->')
        $idx_cta = $content.IndexOf('<!-- Footer CTA -->')
        $idx_footer = $content.IndexOf('<!-- Footer -->')
        
        if ($idx_faq -ne -1 -and $idx_cta -ne -1 -and $idx_footer -ne -1) {
            if ($idx_cta -lt $idx_faq) {
                Write-Host "Fixing $f..."
                
                $cta_block = $content.Substring($idx_cta, $idx_faq - $idx_cta)
                $faq_block = $content.Substring($idx_faq, $idx_footer - $idx_faq)
                
                $new_content = $content.Substring(0, $idx_cta) + $faq_block + $cta_block + $content.Substring($idx_footer)
                Set-Content -Path $f -Value $new_content -NoNewline
            } else {
                Write-Host "$f is already FAQ before CTA"
            }
        }
    }
}
