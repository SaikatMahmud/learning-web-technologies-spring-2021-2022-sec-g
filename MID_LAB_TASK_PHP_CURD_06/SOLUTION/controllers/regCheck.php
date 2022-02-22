<?php 
session_start();

if(isset($_REQUEST['submit'])){
	$id=$_REQUEST['id'];
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];
	$email = $_REQUEST['email'];


	if($username != null && $password != null && $email != null){
		
		//$user = ['username'=> $username, 'password'=>$password, 'email'=>$email];
		//$_SESSION['user'] = $user;

		$user ="\r\n".$id." |".$username." |".$password." |".$email;
		$file = fopen('../models/user.txt', 'a');
		fwrite($file, $user);
		$inputId++;
		
		header('location: ../views/login.php');

	}else{
		echo "null submission ....";
	}
}

?>