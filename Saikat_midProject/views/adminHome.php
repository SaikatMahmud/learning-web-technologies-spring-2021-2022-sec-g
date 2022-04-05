<?php
require('header.php');
$adminid= $_GET['id'];

?>
<html>
<head>
	<title>Admin Home</title>
</head>
<body>
	<h3 align="center">Welcome (name)</h3> 
	<h4 align="right"><a href="../controllers/logout.php"> logout</a></h4>
	<p align="right">
	<tr>
		<a href="adminProfile.php?id=$adminid">Your Profile</a>
		<td>
		<select>
		<option selected disabled hidden>More Options</option>
		<option value="editAccount"><a href="../view/edit.php">Edit profile info</option>
		<option value="password"><a href="../view/password.php">Change passoword</option>
		</select>
		</td>
	</tr>
	</p>
	<p align="">
		<a href="reports.php">Reports</a>
	</p>
	<p align="">
	</br>
	</br>
		<a href="userlist.php">View Users</a>  |  
		<a href="viewPostAdmin.php">View Posts</a>  |  
	</br>
	</br>
		<a href="buyerSellerList.php">Buyer-Seller List</a>  |  
		<a href="productsAdmin.php">Products</a>  |  
		
	</p>
</body>
</html>