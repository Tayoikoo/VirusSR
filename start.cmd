
@echo off
TITLE VirusSR PHP - Honkai Star Rail
cd /d %~dp0
set PHP_BINARY=php

if exist bin\php.exe (
	set PHP_BINARY=bin\php.exe
)

if "%PHP_BINARY%"=="" (
	echo Couldn't find a PHP binary in system PATH or "%~dp0bin"
	pause
	exit 1
)

cls

%PHP_BINARY% src/Start.php %* || pause