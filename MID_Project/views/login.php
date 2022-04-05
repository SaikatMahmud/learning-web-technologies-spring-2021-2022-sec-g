<?php 
$uerror = "";
$passerror = "";
$errormsg="";
if (isset($_GET['msg']))
{
	if($_GET['msg']=="error")
	{
		$errormsg="Invalid Username/Password !";
	}
	
}

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
		<?=$errormsg?>
	</form>
	
	<a href="reg.php">SignUp </a>
</body>
</html>