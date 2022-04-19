<?php
require('header.php');
require('../models/userModel.php');
$id = $_GET['id'];
	$name = $_REQUEST['name'];
	$username = $_REQUEST['username'];
	$email = $_REQUEST['email'];
	$mobile = $_REQUEST['mobile'];
	$dob = $_REQUEST['dob'];
	//if (($name && $username && $email && $mobile && $dob) != null && isset($_REQUEST['gender'])) {
		//$gender = $_REQUEST['gender'];
		$update = updateUser($id, $name, $username, $mobile, $email, $dob, "");
		if ($update) {
			echo "done";
			// $printUpdate="Update successfull...";
			// header("location: edit.php?id=$id&msg=$printUpdate");

		} else {
			echo "Update operation failed!";
		}
	//} 

?>
