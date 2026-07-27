$files = @('toefl.php', 'sat.php', 'pte.php', 'oet.php', 'gre.php', 'ielts.php', 'gmat.php', 'german.php', 'french.php', 'duolingo.php')

foreach ($f in $files) {
    if (Test-Path $f) {
        $content = Get-Content $f -Raw
        $idx_faq = $content.IndexOf('<!-- FAQs -->')
        $idx_cta = $content.IndexOf('<!-- Footer CTA -->')
        if ($idx_faq -ne -1 -and $idx_cta -ne -1) {
            if ($idx_faq -lt $idx_cta) {
                Write-Host "$($f): FAQs before CTA (NEEDS FIX)"
            } else {
                Write-Host "$($f): CTA before FAQs (OK)"
            }
        } else {
            Write-Host "$($f): Missing one or both sections"
        }
    }
}
