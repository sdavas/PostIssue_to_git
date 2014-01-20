@echo OFF
cls

//paste below line from post issue in CLI
rem postissue username password https://api.github.com  repository "The title of issue" "issue description”

SET user_name=%1
SET password=%2
SET repo=%4
SET title=%5
SET desc=%6

echo.%3 
echo "*************"
echo.%3 | findstr /C:"github" 1>nul

if errorlevel 1 (
  SET post_link="https://bitbucket.org/"
) ELSE (
  SET post_link=%3/repos/%user_name%/%repo%/issues
)

SET post_link=%3/repos/%user_name%/%repo%/issues

echo username = %user_name%
echo password = %password%
echo post_link = %post_link%
echo repo = %repo%
echo title = %title%
echo desc = %desc%

curl --user "%user_name%:%password%" --data '{"title":%title%,"public":"true","body":%desc%,"assignee":%user_name%}' %post_link%
pause
