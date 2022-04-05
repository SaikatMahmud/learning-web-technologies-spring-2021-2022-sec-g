<?php
require('header.php');
$error = "";
if (isset($_GET['msg'])) {
	if ($_GET['msg'] == 'error') {
		$error = "Registration Failed";
	}
}
?>
<html>

<head>
	<title>Create User</title>
</head>

<body>
	<form method="POST" action="../controllers/regCheck.php">
		<table>
			<tr>
				<td>Name</td>
				<td>
					<input type="text" name="name" value="">
				</td>
			</tr>
			<tr>
				<td>Username</td>
				<td>
					<input type="text" name="username" value="">
				</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>
					<input type="email" name="email" value="">
				</td>
			</tr>
			<tr>
				<td>Mobile</td>
				<td>
					<input type="number" name="mobile" value="">
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>
					<input type="password" name="password" value="">
				</td>
			</tr>
			<tr>
				<td>Date of Birth</td>
				<td>
					<input type="date" name="dob" value="">
				</td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>
					<input type="radio" name="gender" value="Male">Male
					<input type="radio" name="gender" value="Female">Female
					<input type="radio" name="gender" value="Others">Others
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit" value="Submit">
				</td>
			</tr>
		</table>
		<?= $error ?>
	</form>
</body>

</html>