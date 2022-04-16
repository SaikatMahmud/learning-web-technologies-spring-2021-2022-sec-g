<?php
require('header.php');
require('../models/userModel.php');
$id = $_GET['id'];
$userName = $_GET['name'];
$user = getUserByID($id);
$user = mysqli_fetch_assoc($user);
//print_r($user);
// $printUpdate="";
// $printUpdate=$_GET['msg'];

if (isset($_REQUEST['submit'])) {

	$name = $_REQUEST['name'];
	$username = $_REQUEST['username'];
	$email = $_REQUEST['email'];
	$mobile = $_REQUEST['mobile'];
	$dob = $_REQUEST['dob'];


	if (($name && $username && $email && $mobile && $dob) != null && isset($_REQUEST['gender'])) {
		$gender = $_REQUEST['gender'];
		$update = updateUser($id, $name, $username, $mobile, $email, $dob, $gender);
		if ($update) {
			header("location: userlist.php");
			// $printUpdate="Update successfull...";
			// header("location: edit.php?id=$id&msg=$printUpdate");

		} else {
			$printUpdate = "Operation Failed";
		}
	} else
		echo 'null submission!';
}

if(isset($_REQUEST['imgUpload']))
{
	$src = $_FILES['propic']['tmp_name'];
	$picName= $_FILES['propic']['name'];
	$upload=uploadProPic($picName, $id);
	$des = '../assets/'.$picName;
		
		if($upload && (move_uploaded_file($src, $des))){
			echo "Image uploaded";
		}else{
			echo "Image upload failed";
		}
}

?>

<html>

<head>
	<title>Your Profile</title>
</head>

<body>

	<h4 align="right"><a href="../controllers/logout.php"> logout</a></h4>
	<a href="home.php?userid=<?= $id ?>&name=<?= $userName ?>"> Back</a>
	<br></br>


	<form method="POST" action="#">
		<fieldset>
			<legend>EDIT PROFILE</legend>

			<table>
				<tr>
					<td>Name</td>
					<td>
						<input type="text" name="name" value="<?= $user['NAME'] ?>">
					</td>
				</tr>
				<tr>
					<td>Username</td>
					<td>
						<input type="text" name="username" value="<?= $user['USERNAME'] ?>">
					</td>
				</tr>
				<tr>
					<td>Email</td>
					<td>
						<input type="email" name="email" value="<?= $user['EMAIL'] ?>">
					</td>
				</tr>
				<tr>
					<td>Mobile</td>
					<td>
						<input type="text" name="mobile" value="<?= $user['MOBILE'] ?>">
					</td>
				</tr>
				<tr>

					<td>DOB</td>
					<td>
						<input type="date" name="dob" value="<?= $user['DOB'] ?>">
					</td>
				</tr>

				<tr>
					<td>Gender</td>
					<td>
						<input type="radio" name="gender" value="Male">Male
						<input type="radio" name="gender" value="Female">Female
						<input type="radio" name="gender" value="Others">Others

						<!-- <input type="radio" name="gender" value="<?php if ($user['GENDER'] == "Female") echo "Female"  ?>">Female
					<input type="radio" name="gender" value="<?php if ($user['GENDER'] == "Others") echo "Others"  ?>">Others -->

					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="submit" value="Update">
					</td>
				</tr>
			</table>
			<br></br>
			</form>

			<form method="POST" action="#" enctype="multipart/form-data">
				Upload or Update profile pic: <input type="file" name="propic">
				<br></br>
				<input type="submit" name="imgUpload" value="Uplaod">

		</fieldset>
	</form>
</body>

</html>