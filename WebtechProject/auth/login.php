<?php
session_start();
require_once '../model/userDataHandle.php';
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
    $user = getUser($query['username']);
    if (!$user) {
        $uerror = 'No user found';
    }
    else if ($user['pass'] !== $query['password']) {
        $passerror = 'Incorrect Password';
    }
    else {
        $_SESSION['current_user'] = $user['username'];
		setcookie('current_user', $user['username'], time()+300, '/');
        header('location: ../views/dashboard.php');
    }

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
	<form method="POST" action="login.php">
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