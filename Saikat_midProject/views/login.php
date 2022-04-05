<?php 
$uerror = "";
$passerror = "";

if(isset($_POST['submit']))
{
$username= $_POST['username'];
$password= $_POST['password'];
$usernamelength= strlen($username);
$passwordlength= strlen($password);

if ($usernamelength >2 and $passwordlength >2)
{
	$query = array(
    'username' => $username, 
    'password' => $password,
    );
$query = http_build_query($query);
header("location: ../controllers/loginCheck.php?$query");

	/*session_start();
	
	$query = array(
    'username' => $username, 
    'password' => $password,
    );
$query = http_build_query($query);
$_SESSION['passing'] = $query;
header("Location: ultrapro.php?$query");
	header("location: ../controllers/loginCheck.php?username=$username&password=$password");
	header("location: ../controllers/loginCheck.php?".$_SESSION['passing']);
	session_unset();*/
}

if ($usernamelength < 3){
$uerror="Username must be at least 3 characters";
}

if ($passwordlength < 3){
$passerror="Password must be at least 3 characters";
}
}
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
					<input type="text" name="username" value="">
				</td>
				<td>
					<?=$uerror?>
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>
					<input type="password" name="password" value="">
				</td>
				<td>
					<?=$passerror?>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit" value="Submit">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>