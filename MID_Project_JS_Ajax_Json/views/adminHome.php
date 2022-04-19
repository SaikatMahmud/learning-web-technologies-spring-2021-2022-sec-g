<?php
require('header.php');
$id = $_GET['id'];
$userName = $_GET['name'];

?>
<html>

<head>
	<title>Admin Home</title>
</head>

<body>
	<style>
				h1{
				background-color: palegreen;
				padding: 10px;
			}
			#abtn{
					padding: 5px 5px 5px 5px;
					background-color: cornflowerblue;
					border-radius: 0.25rem;
					color: white;
					text-decoration: none;
			}
			#abtn:hover{
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
			#adminMood{
					padding: 5px 5px 5px 5px;
					background-color: wheat;
					border-radius: 0.25rem;
					color: black;
					text-decoration: none;
			}
			#adminMood:hover{
				border: 3px solid cornflowerblue;
					background-color: whitesmoke;
					border-radius: 0.25rem;
					color:cornflowerblue;
			}
	</style>
	<h2 align="center">Welcome <?=$userName?> as admin</h2>
	<h4 align="right"><a id="logout" href="../controllers/logout.php"> logout</a></h4>
		<tr>
			<a id="adminMood" href="home.php?userid=<?=$id?>&name=<?=$userName?>">< Home page </a>
		</tr>
		</br>
		</br>
		</br>
		<!-- <td>
				<select>
					<option selected disabled hidden>More Options</option>
					<option value="editAccount"><a href="../view/edit.php">Edit profile info</option>
					<option value="password"><a href="../view/password.php">Change passoword</option>
				</select>
			</td> -->
		</tr>
		</tr>

	<p align="center">
		<!-- <a id="b" href="reports.php">Reports</a> -->
		<!-- </br>
		</br> -->
		<a id="abtn" href="userlist.php">View Users</a> |
		<a id="abtn" href="viewPostAdmin.php">View Posts</a> |
		</br>
		</br>
		<a id="abtn" href="buyerSellerList.php">Buyer-Seller List</a> |
		<a id="abtn" href="productListAdmin.php">Products</a> |
	</p>
</body>

</html>