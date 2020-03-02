@echo off
rem START or STOP Services
rem ----------------------------------
rem Check if argument is STOP or START

if not ""%1"" == ""START"" goto stop

if exist C:\Users\Development\Documents\GitHub\SEDEA\XAMMP\hypersonic\scripts\ctl.bat (start /MIN /B C:\Users\Development\Documents\GitHub\SEDEA\XAMMP\server\hsql-sample-database\scripts\ctl.bat START)
if exist C:\Users\Development\Documents\GitHub\SEDEA\XAMMP\ingres\scripts\ctl.bat (start /MIN /B C:\Users\Development\Documents\GitHub\SEDEA\XAMMP\ingres\scripts\ctl.bat START)
if exist C:\Users\Development\Documents\GitHub\SEDEA\XAMMP\mysql\scripts\ctl.bat (start /MIN /B C:\Users\Development\Documents\GitHub\SEDEA\XAMMP\mysql\scripts\ctl.bat START)
if exist C:\Users\Development\Documents\GitHub\SEDEA\XAMMP\postgresql\scripts\ctl.bat (start /MIN /B C:\Users\Development\Documents\GitHub\SEDEA\XAMMP\postgresql\scripts\ctl.bat START)
if exist C:\Users\Development\Documents\GitHub\SEDEA\XAMMP\apache\scripts\ctl.bat (start /MIN /B C:\Users\Development\Documents\GitHub\SEDEA\XAMMP\apache\scripts\ctl.bat START)
if exist C:\Users\Development\Documents\GitHub\SEDEA\XAMMP\openoffice\scripts\ctl.bat (start /MIN /B C:\Users\Development\Documents\GitHub\SEDEA\XAMMP\openoffice\scripts\ctl.bat START)
if exist C:\Users\Development\Documents\GitHub\SEDEA\XAMMP\apache-tomcat\scripts\ctl.bat (start /MIN /B C:\Users\Development\Documents\GitHub\SEDEA\XAMMP\apache-tomcat\scripts\ctl.bat START)
if exist C:\Users\Development\Documents\GitHub\SEDEA\XAMMP\resin\scripts\ctl.bat (start /MIN /B C:\Users\Development\Documents\GitHub\SEDEA\XAMMP\resin\scripts\ctl.bat START)
if exist C:\Users\Development\Documents\GitHub\SEDEA\XAMMP\jetty\scripts\ctl.bat (start /MIN /B C:\Users\Development\Documents\GitHub\SEDEA\XAMMP\jetty\scripts\ctl.bat START)
if exist C:\Users\Development\Documents\GitHub\SEDEA\XAMMP\subversion\scripts\ctl.bat (start /MIN /B C:\Users\Development\Documents\GitHub\SEDEA\XAMMP\subversion\scripts\ctl.bat START)
rem RUBY_APPLICATION_START
if exist C:\Users\Development\Documents\GitHub\SEDEA\XAMMP\lucene\scripts\ctl.bat (start /MIN /B C:\Users\Development\Documents\GitHub\SEDEA\XAMMP\lucene\scripts\ctl.bat START)
if exist C:\Users\Development\Documents\GitHub\SEDEA\XAMMP\third_application\scripts\ctl.bat (start /MIN /B C:\Users\Development\Documents\GitHub\SEDEA\XAMMP\third_application\scripts\ctl.bat START)
goto end

:stop
echo "Stopping services ..."
if exist C:\Users\Development\Documents\GitHub\SEDEA\XAMMP\third_application\scripts\ctl.bat (start /MIN /B C:\Users\Development\Documents\GitHub\SEDEA\XAMMP\third_application\scripts\ctl.bat STOP)
if exist C:\Users\Development\Documents\GitHub\SEDEA\XAMMP\lucene\scripts\ctl.bat (start /MIN /B C:\Users\Development\Documents\GitHub\SEDEA\XAMMP\lucene\scripts\ctl.bat STOP)
rem RUBY_APPLICATION_STOP
if exist C:\Users\Development\Documents\GitHub\SEDEA\XAMMP\subversion\scripts\ctl.bat (start /MIN /B C:\Users\Development\Documents\GitHub\SEDEA\XAMMP\subversion\scripts\ctl.bat STOP)
if exist C:\Users\Development\Documents\GitHub\SEDEA\XAMMP\jetty\scripts\ctl.bat (start /MIN /B C:\Users\Development\Documents\GitHub\SEDEA\XAMMP\jetty\scripts\ctl.bat STOP)
if exist C:\Users\Development\Documents\GitHub\SEDEA\XAMMP\hypersonic\scripts\ctl.bat (start /MIN /B C:\Users\Development\Documents\GitHub\SEDEA\XAMMP\server\hsql-sample-database\scripts\ctl.bat STOP)
if exist C:\Users\Development\Documents\GitHub\SEDEA\XAMMP\resin\scripts\ctl.bat (start /MIN /B C:\Users\Development\Documents\GitHub\SEDEA\XAMMP\resin\scripts\ctl.bat STOP)
if exist C:\Users\Development\Documents\GitHub\SEDEA\XAMMP\apache-tomcat\scripts\ctl.bat (start /MIN /B /WAIT C:\Users\Development\Documents\GitHub\SEDEA\XAMMP\apache-tomcat\scripts\ctl.bat STOP)
if exist C:\Users\Development\Documents\GitHub\SEDEA\XAMMP\openoffice\scripts\ctl.bat (start /MIN /B C:\Users\Development\Documents\GitHub\SEDEA\XAMMP\openoffice\scripts\ctl.bat STOP)
if exist C:\Users\Development\Documents\GitHub\SEDEA\XAMMP\apache\scripts\ctl.bat (start /MIN /B C:\Users\Development\Documents\GitHub\SEDEA\XAMMP\apache\scripts\ctl.bat STOP)
if exist C:\Users\Development\Documents\GitHub\SEDEA\XAMMP\ingres\scripts\ctl.bat (start /MIN /B C:\Users\Development\Documents\GitHub\SEDEA\XAMMP\ingres\scripts\ctl.bat STOP)
if exist C:\Users\Development\Documents\GitHub\SEDEA\XAMMP\mysql\scripts\ctl.bat (start /MIN /B C:\Users\Development\Documents\GitHub\SEDEA\XAMMP\mysql\scripts\ctl.bat STOP)
if exist C:\Users\Development\Documents\GitHub\SEDEA\XAMMP\postgresql\scripts\ctl.bat (start /MIN /B C:\Users\Development\Documents\GitHub\SEDEA\XAMMP\postgresql\scripts\ctl.bat STOP)

:end

