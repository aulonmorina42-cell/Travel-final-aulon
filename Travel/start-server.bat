@echo off
REM Start PHP Built-in Server for Roamly Travel

echo.
echo Starting Roamly Travel Local Server...
echo.
echo Accessing the site:
echo   http://localhost:8000
echo.
echo Press Ctrl+C to stop the server
echo.
echo.

cd /d "%~dp0"
php -S localhost:8000

pause
