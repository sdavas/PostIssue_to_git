<html>
<head>
 <title>PHP Test</title>
</head>
<body>

<?php

//base github api url
$base_url="https://api.github.com";

//github account username 
$username=$argv['1'];

//github account password
$password=$argv['2'];

//github repository where issue will be created
$repo=$argv['3'];

//issue title 
$issueTitle=$argv['4'];

//issue description
$issueDescription=$argv['5'];



$data = array(
'title'=> $issueTitle, 
'body'=> $issueDescription,
'labels'=> 'no label'
);

//issue body should be send in json format
$data_string = json_encode($data);

//github api url to create issue
$url=$base_url."/repos/".$username."/".$repo."/issues";

//userdata to be send in array to call github api for authorization

$aUserData=array(
            "username"=>$username,
            "password"=>$password,
            "url"=>$url
          );


//check if required parameter sent via user
if (!empty($argv)) { 

// call github api to create issue with curl
createissue($aUserData,$data_string);

} else {

echo "please pass parameters as per instruction in readme";
}


//To call github api using curl 

function createissue($aData,$aIssue){

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,$aData['url']);
curl_setopt($ch, CURLOPT_USERAGENT,$aData['username']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $aIssue);
curl_setopt($ch, CURLOPT_USERPWD, $aData['username'].":".$aData['password']);

$response=curl_exec($ch);
curl_close($ch);
return json_decode($response);
}

?>

</body>
</html>
