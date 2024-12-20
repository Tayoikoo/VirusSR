@echo off
cls
REM Define paths
set PROTO_FILE=StarRail.proto
set OUTPUT_DIR=protos/

if not exist "%OUTPUT_DIR%" (
    mkdir "%OUTPUT_DIR%"
)

echo Compiling %PROTO_FILE% to %OUTPUT_DIR%....

"protoc" --php_out=%OUTPUT_DIR% %PROTO_FILE%

if %ERRORLEVEL%==0 (
    echo [SUCCESS] Compiled %PROTO_FILE% to %OUTPUT_DIR%
    python cmdid.py
) else (
    echo [ERROR] Failed to compile %PROTO_FILE%.
)

pause
