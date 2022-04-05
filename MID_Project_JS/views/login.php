<?php
$uerror = "";
$passerror = "";
$errormsg = "";
if (isset($_GET['msg'])) //from loginCheck
{
	if ($_GET['msg'] == "error") {
		$errormsg = "Invalid Username/Password !";
	}
}

// if(isset($_POST['submit']))
// {
// $username= $_POST['username'];
// $password= $_POST['password'];
// $usernamelength= strlen($username);
// $passwordlength= strlen($password);

// if ($usernamelength >2 and $passwordlength >2)
// {
// 	$query = array(
//     'username' => $username, 
//     'password' => $password,
//     );
// $query = http_build_query($query);
// header("location: ../controllers/loginCheck.php?$query");
// }

// if ($usernamelength < 3){
// $uerror="Username must be at least 3 characters";
// }

// if ($passwordlength < 3){
// $passerror="Password must be at least 3 characters";
// }
// }

?>

<html>

<head>
	<title>login</title>
</head>

<body>
	<form method="POST" action="#">
		<table>
			<tr>
				<td>Username</td>
				<td>
					<input type="text" id="username" name="username" value="">
				</td>
				<td id="userError"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>
					<input type="password" id="password" name="password" value="">
				</td>
				<td id="passError"></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="button" name="submit" value="Submit" onclick="checkForm()">
				</td>
			</tr>
		</table>


		<script>
			function checkForm() {
				let username = document.getElementById('username').value;
				let password = document.getElementById('password').value;
				let usernamelength = username.length;
				let passwordlength = password.length;
				if (usernamelength > 2 && passwordlength > 2) {
					const url = '../controllers/loginCheck.php?username=' + username + '&password=' + password;
					window.location = url;
				}
				if (usernamelength < 3) {
					document.getElementById('userError').innerHTML = "Username must be at least 3 characters";
				}
				if (passwordlength < 3) {
					document.getElementById('passError').innerHTML = "Password must be at least 3 characters";
				}
				else {
					document.getElementById('userError').innerHTML = "";
					document.getElementById('passError').innerHTML = "";
				}
			}
		</script>


	</form>
	<?= $errormsg ?>
	</br>
	<a href="reg.php">SignUp </a>
</body>

</html>