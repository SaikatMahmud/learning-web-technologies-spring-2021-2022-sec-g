<?php 
	require('header.php');

	$id= $_GET['id'];
	$deleteUser;
	$file = fopen('../models/user.txt', 'r');

	while (!feof($file)) {
		$user = fgets($file);
		$userArray = explode("|", $user);

		if(trim($userArray[0]) == $id){
			$deleteUser = $userArray;
			break;
		}
}
    preg_replace($deleteUser[0],"", '../models/user.txt');
    preg_replace($deleteUser[1],"", '../models/user.txt');
    preg_replace($deleteUser[2],"", '../models/user.txt');
    preg_replace($deleteUser[3],"", '../models/user.txt');
?>