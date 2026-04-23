@echo off
echo Starting Laravel Chirper Development Server...
cd /d "%~dp0"
php -S 127.0.0.1:8000 server.php
pause