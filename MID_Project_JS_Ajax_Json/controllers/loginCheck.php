<?php
session_start();
require('../models/userModel.php');

$username = $_GET['username'];
$password = $_GET['password'];
// $username = $_POST['username'];
// $password = $_POST['password'];

$statusAc = loginActive($username, $password);
$statusDeac = loginDeac($username, $password);


if ($statusAc) {
	$_SESSION['status'] = "true";
	setcookie('status', 'true', time() + 600, '/');
	$row = mysqli_fetch_assoc($statusAc);
	//header("location: ../views/home.php?userid=$row[ID]&name=$row[NAME]");
	echo "../views/home.php?userid=$row[ID]&name=$row[NAME]";
} else if ($statusDeac) {
	$row = mysqli_fetch_assoc($statusDeac);
	//header("location: ../views/deactiveWarning.php");
	echo "deactive";
} else {
	echo "notFound";
}
