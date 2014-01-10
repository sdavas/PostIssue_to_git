<html>
<head>
 <title>PHP Test</title>
</head>
<script type="text/javascript">
function validate(){

var username=document.getElementById('username').value;
var password=document.getElementById('password').value;
var repository=document.getElementById('repository').value;
var issue=document.getElementById('issue').value;
var flag=1;
if(username==''){
alert("please fill username");
flag=0;
}
if(password==''){
alert("please fill password");
flag=0;
}
if (repository==''){
alert("please fill repository");
flag=0;
}
if(issue==''){
alert("please fill issue title");
flag=0;
}
alert(flag);
if (flag==1) {
return true;
} else if(flag==0) {
return false;
}

}
</script>
<body>
	<form name="create_issue" action="post_issue.php" method="post" onsubmit="return validate();">
		<table>
			<tr>
				<td>Git Username:</td>
				<td><input type="text" id="username" name="username"></td>
			</tr>
			<tr>
				<td>Git Password: </td>
				<td><input type="text" id="password" name="password"></td>
			</tr>
			<tr>
				<td>Git Repository:</td>
				<td> <input type="text" id="repository" name="repository"></td>
			</tr>
			<tr>
				<td>Issue Title: </td>
				<td><input type="text" id="issue" name="issue"></td>
			</tr>
			<tr>
				<td>Issue Description:</td>
				<td><textarea name="issue_desc"></textarea></td>
			</tr>
			<tr>
			 <td><input type="submit" name="submit" value="submit"</td>
			
			</tr>
		</table>
	</form>
</body>
<html>
