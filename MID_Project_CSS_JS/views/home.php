<?php
require('header.php');
$id = $_GET['userid']; //from loginCheck
$name = $_GET['name'];

?>

<html>
<head>
	<title>Home Page</title>
	<style>
			h1{
				background-color: gray;
				padding: 10px;
			}
			#name{
					padding: 5px 5px 5px 5px;
					background-color: cornflowerblue;
					border-radius: 0.25rem;
					color: white;
					text-decoration: none;
			}
			#name:hover{
				border: 3px solid cornflowerblue;
					background-color: white;
					border-radius: 0.25rem;
					color:cornflowerblue;
			}
			#logout
			{
					border: 3px solid black;
					background-color: white;
					border-radius: 0.25rem;
					color:black;
					text-decoration: none;
					padding: 5px 5px 5px 5px;
			}
			#logout:hover{
					background-color: crimson;
					border-radius: 0.25rem;
					color: white;		
			}
			#logout:visited{
				text-decoration: none;
			}
	</style>
</head>

<body>
	<h1>Admin use this home page as a normal user !</h1>
	<h4  align="right"><a id="logout" href="../controllers/logout.php"> logout</a></h4>
	<h2> Welcome <a id="name" href="showProfile.php?id=<?=$id?>&name=<?=$name?>"><?= $name ?></a></h2>
	<h2 align="center"> ...news feed...</h2></br></br>




	<!-- <a href="showProfile.php?id=<?=$id?>&name=<?=$name?>">Your Profile</a> </br></br> -->
	<a href="adminHome.php?id=<?=$id?>&name=<?=$name?>">Go to admin mode</a>

</body>

</html>