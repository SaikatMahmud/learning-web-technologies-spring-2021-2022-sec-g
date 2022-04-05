<?php 
session_start();
require('../models/userModel.php');

//if(isset($_REQUEST['submit'])){
	$name=$_GET['name'];
	$username = $_GET['username'];
	$email = $_GET['email'];
	$mobile = $_GET['mobile'];

	$password = $_GET['password'];
	$dob = $_GET['dob'];
	$gender = $_GET['gender'];


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
	
//}
// else{
// 	echo "null submission ....";
// }

?>