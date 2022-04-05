<?php 
	

	if(isset($_REQUEST['submit'])){
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];

		if($username != null && $password != null && $email != null){
			
			

			$user = $username."|".$password."|".$email."\r\n";
			$file = fopen("user.txt", 'a');
			fwrite($file, $user);
			fclose($file);
			
			header('location:login.php');

		}else{
			echo "null submission..";
		}
	}	
?>

<html>
<head>
	<title>Signup Page</title>
</head>
<body>

	<form method="POST" action="">
		<fieldset>
			<legend>Signup</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" value=""></td>
+				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value=""></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email" value=""></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>