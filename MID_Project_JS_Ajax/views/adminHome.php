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
	<h2 align="center">Welcome <?=$userName?> as admin</h2>
	<h4 align="right"><a href="../controllers/logout.php"> logout</a></h4>
		
	
		<tr>
			<a href="home.php?userid=<?=$id?>&name=<?=$userName?>">< Home page </a>
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
		<a href="reports.php">Reports</a>
		</br>
		</br>
		<a href="userlist.php">View Users</a> |
		<a href="viewPostAdmin.php">View Posts</a> |
		</br>
		</br>
		<a href="buyerSellerList.php">Buyer-Seller List</a> |
		<a href="productListAdmin.php">Products</a> |
	</p>
</body>

</html>