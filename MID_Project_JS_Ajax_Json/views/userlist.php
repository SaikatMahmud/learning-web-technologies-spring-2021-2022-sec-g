<?php
require('header.php');
// $error = "";
// if (isset($_GET['msg'])) {
// 	if ($_GET['msg'] == 'error') {
// 		$error = "Registration Failed";
// 	}
// }
?>
<html>
<head>
	<title>Userlist</title>
</head>



<body onload="loadTable()">
<script type="text/javascript" src="../js/userList.js"></script>
<h4 class="upper" align="right"><a href="../controllers/logout.php"> logout</a></h4>
<a class="upper" href="adminHome.php"> Back</a>
<br></br>
<p align="center"><button><a href="addUser.php">Add User</a></button></p>

<div id="table"></div>
<!-- <style>
	#table{
		padding: 10px;
		/* position:fixed;
		left:80px;
		top:200px */
	}
	/* .upper
	{
		position:fixed;

	} */
</style> -->
	


	<br><br>
</body>
</html>

