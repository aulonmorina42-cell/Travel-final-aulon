# Start PHP Built-in Server for Roamly Travel

Write-Host "`nStarting Roamly Travel Local Server..." -ForegroundColor Green
Write-Host ""
Write-Host "Access the site:" -ForegroundColor Cyan
Write-Host "  http://localhost:8000" -ForegroundColor Yellow
Write-Host ""
Write-Host "Press Ctrl+C to stop the server" -ForegroundColor Yellow
Write-Host ""

Set-Location $PSScriptRoot
php -S localhost:8000
