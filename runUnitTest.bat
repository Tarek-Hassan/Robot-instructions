@echo off
@echo off

cd "%CD%\Tests"

echo "Please check unitTestResult.txt for details" && pause
.\vendor\bin\phpunit > ..\unitTestResult.txt 2>&1 && pause

cmd.exe
