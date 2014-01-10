<html>
<head>

  <!-- Load jQuery and the validate plugin -->
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
  
  <!-- jQuery Form Validation code -->
  <script>
  
  // When the browser is ready...
  $(function() {
  
    // Setup form validation on the #create_issue element
    $("#create_issue").validate({
    
        // Specify the validation rules
        rules: {
            username: "required",
            password: "required",
	    repository: "required",
            issue: "required"
        },
        
        // Specify the validation error messages
        messages: {
            username: "Please provide the username",
            password: "Please provide the password",
	    repository: "Please provide the repository name",
            issue: "Please provide the issue title"
        },
        
        submitHandler: function(form) {
            form.submit();
        }
    });

  });
  
  </script>
</head>
<body>
  <h1>Post Issues to Github</h1>

  <!--  The form that will be parsed by jQuery before submit  -->
 
  
  <form name="create_issue" id="create_issue" action="post_issue.php" method="post">
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
</html>
