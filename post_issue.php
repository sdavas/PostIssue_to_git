<?php

//base github api url
$base_url="https://api.github.com";

//github account username 
$username=$_POST['username'];

//github account password
$password=$_POST['password'];

//github repository where issue will be created
$repo=$_POST['repository'];

//issue title 
$issueTitle=$_POST['issue'];

//issue description
$issueDescription=$_POST['issue_desc'];



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



if(isset($_POST['submit'])){

// call github api to create issue with curl
createissue($aUserData,$data_string);

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
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); 
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$response=curl_exec($ch);
curl_close($ch);
return json_decode($response);
}

?>
