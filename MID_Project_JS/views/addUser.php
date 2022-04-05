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
	<!-- <form> -->
	<table>
		<tr>
			<td>Name</td>
			<td>
				<input type="text" id="name" name="name" value="">
			</td>
			<td id="nameCheck"></td>
		</tr>
		<tr>
			<td>Username</td>
			<td>
				<input type="text" id="username" name="username" value="">
			</td>
			<td id="usernameCheck"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>
				<input type="email" id="email" name="email" value="">
			</td>
			<td id="emailCheck"></td>
		</tr>
		<tr>
			<td>Mobile</td>
			<td>
				<input type="number" id="mobile" name="mobile" value="">
			</td>
			<td id="mobileCheck"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>
				<input type="password" id="password" name="password" value="">
			</td>
			<td id="passCheck"></td>
		</tr>
		<tr>
			<td>Date of Birth</td>
			<td>
				<input type="date" id="dob" name="dob" value="">
			</td>
			<td id="dobCheck"></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td>
				<input type="radio" id="gender" name="gender" value="Male">Male
				<input type="radio" id="gender" name="gender" value="Female">Female
				<input type="radio" id="gender" name="gender" value="Others">Others
			</td>
			<td id="genderCheck"></td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="button" name="submit" value="Submit" onclick="checkForm()">
			</td>
		</tr>
	</table>
	<?= $error ?>
	
	<!-- </form> -->
	<script>
		function checkForm() {
			let name = document.getElementById('name').value;
			let username = document.getElementById('username').value;
			let email = document.getElementById('email').value;
			let mobile = document.getElementById('mobile').value;
			let password = document.getElementById('password').value;
			let dob = document.getElementById('dob').value;
			let gender = document.getElementById('gender').value;
			
			// if((name.length)>0 && (username.length) >3 && (email.length) >0 && (mobile.length)==11 && (password.length)>3)
			// {
			// 	const url = '../controllers/regCheck.php?name=' + name + '&username=' + username + '&email=' + email + '&mobile=' + mobile + '&password=' + password + '&dob=' + dob + '&gender=' + gender;
			// 	window.location=url;
			// }

			if ((name.length) <= 0) {
				document.getElementById('nameCheck').innerHTML = "Name can not be empty";
			}
			if ((username.length) < 3) {
				document.getElementById('usernameCheck').innerHTML = "Username must be at least 3 characters";
			}
			if ((email.length)<=0) {
				document.getElementById('emailCheck').innerHTML = "Email can not be empty";
			}
			if ((mobile.length) < 11 || (mobile.length) > 11) {
				document.getElementById('mobileCheck').innerHTML = "Mob number must be 11 digit";
			}
			if ((password.length) < 3) {
				document.getElementById('passCheck').innerHTML = "Password must be at least 3 characters";
			}
			if ((dob) == null) {
				document.getElementById('dobCheck').innerHTML = "insert a date";
			}
			if (!(gender).checked) {
				document.getElementById('genderCheck').innerHTML = "&emsp;Select a gender";
			}
			else {
				const url = '../controllers/regCheck.php?name=' + name + '&username=' + username + '&email=' + email + '&mobile=' + mobile + '&password=' + password + '&dob=' + dob + '&gender=' + gender;
				window.location=url;
			}

		}
	</script>
</body>

</html>