<?php 
session_start();

$username= $_GET['username'];
$password= $_GET['password'];

	//$username = $_REQUEST['username'];
	//$password = $_REQUEST['password'];

/*	if($username != null && $password != null){
		
		if(isset($_SESSION['user'])){
			$user = $_SESSION['user'];			
		}*/

		$userFile = fopen('../models/user.txt', 'r');
		$adminFile = fopen('../models/adminList.txt', 'r');

		while (!feof($file)) {
			$user = fgets($userFile);
			$admin = fgets($adminFile);

			$user = explode('|', $user);
			$admin = explode('|', $admin);

			if(trim($user[1]) == $username && trim($user[2]) == $password){
				$_SESSION['status'] = "true";
				setcookie('status', 'true', time()+300, '/');
				header('location: ../views/home.php');
			}
			if(trim($admin[1]) == $username && trim($admin[2]) == $password){
				$id=$admin[0];
				$_SESSION['status'] = "true";
				setcookie('status', 'true', time()+300, '/');
				header("location: ../views/adminHome.php?id=$id");
			}
		}
		echo "Invalid username/password";

	

?>