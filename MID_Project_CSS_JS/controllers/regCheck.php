<?php 
session_start();
require('../models/userModel.php');

if(isset($_REQUEST['submit'])){
	$name=$_REQUEST['name'];
	$username = $_REQUEST['username'];
	$email = $_REQUEST['email'];
	$mobile = $_REQUEST['mobile'];

	$password = $_REQUEST['password'];
	$dob = $_REQUEST['dob'];
	$gender = $_REQUEST['gender'];



	if($username != null && $password != null && $email != null && $mobile!=null && $dob!=null && $gender!=null){
		
		$signup = signup($name, $username, $email, $mobile, $password, $dob, $gender);
		if($signup)
		{
			header('location: ../views/login.php');
		}
		else
		{
		header('location: ../views/reg.php?msg=error');
		}
	}
	
}
else{
	echo "null submission ....";
}

?>