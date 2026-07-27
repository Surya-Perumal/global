$files = Get-ChildItem -Path "c:\xampp\htdocs\global" -Filter "*.php"
foreach ($file in $files) {
    $lines = Get-Content -Path $file.FullName
    $changed = $false
    for ($i = 0; $i -lt $lines.Length; $i++) {
        if ($lines[$i] -match 'alt="Request Information"') {
            if ($lines[$i] -match 'src="[^"]+"') {
                $lines[$i] = $lines[$i] -replace 'src="[^"]+"', 'src="img/form_img.jpg"'
                $changed = $true
            }
        }
    }
    if ($changed) {
        Set-Content -Path $file.FullName -Value $lines
    }
}
Write-Host "Replaced Request Information image across all files."
