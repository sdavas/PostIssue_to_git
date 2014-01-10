POST ISSUE TO GITHUB

A simple script, written with PHP5 to post issues to Github using GitHub API v3



Requirements:

php  > 5.3 + 
curl enable
json enable

Instructions:

use create_issue.php to post 
username,
password,
repository where you want to post issues ,
issue title and 
issue description.

all fields are mandatory except issue description.

set post_issues.php in action of form in create_issue.php

if SSL certificate is set,change

curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); 
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

to 

curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, True); 
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, True);

in post_issue.php








