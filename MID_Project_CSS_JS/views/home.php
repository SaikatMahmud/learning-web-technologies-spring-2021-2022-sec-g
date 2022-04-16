<?php
require('header.php');
$id = $_GET['userid']; //from loginCheck
$name = $_GET['name'];

?>

<html>

<head>
	<title>Home Page</title>
</head>

<body>
	<h1>Admin use this home page as a normal user !</h1>
	<h4 align="right"><a href="../controllers/logout.php"> logout</a></h4>
	<h2> Welcome <?= $name ?></h2>
	<h2 align="center"> ...news feed...</h2></br></br>




	<a href="showProfile.php?id=<?=$id?>&name=<?=$name?>">Your Profile</a> </br></br>
	<a href="adminHome.php?id=<?=$id?>&name=<?=$name?>">Go to admin mode</a>

</body>

</html>