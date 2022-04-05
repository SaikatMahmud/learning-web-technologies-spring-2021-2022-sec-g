<?php 
	require_once '../model/userDataHandle.php';

	if(isset($_REQUEST['submit'])){
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];

		if($username != null && $password != null && $email != null){
			if (strlen($username) < 2)
				echo 'Username must be more than 2 characters';
			else if (strlen($password) < 8)
				echo 'Password must be more than 8 characters';
			else if (strlen($email) < 5)
				echo 'Invalid Email';
			else {
				$user = array('username'=> $username, 'pass'=> $password, 'mail'=> $email);
				$exists = getUser($username);
				if ($exists) {
					if ($exists['username'] === $username)
						echo 'User Already Exists';
					if ($exists['mail'] === $email)
						echo 'Email is alreaddy in use';
				}
				else {
	    	  		addUser($user);
    	  			header('location: login.php');
				}
			}
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
				</tr>
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