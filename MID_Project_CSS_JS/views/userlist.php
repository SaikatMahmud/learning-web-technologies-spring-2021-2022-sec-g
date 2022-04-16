<html>
<head>
	<title>Userlist</title>
</head>
<body>

<h4 align="right"><a href="../controllers/logout.php"> logout</a></h4>
<a href="adminHome.php"> Back</a>
	<br><br>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>USERNAME</th>
			<th>EMAIL</th>
			<th>MOBILE</th>
			<th>DOB</th>
			<th>GENDER</th>
			<th>STATUS</th>
			<th>ACTION</th>
		</tr>
    <tr>
	<?php
	$deleteError="";
	if(isset($_GET['msg']))
	{
		$deleteError="Delete operation failed !";
	}
		require('header.php');
		require('../models/userModel.php');
		$users=getAllUser();
	?>
		<tr>
	<?php
		while ($row = mysqli_fetch_assoc($users)) {
		foreach($row as $i => $val ){
		//print_r($row);
		//echo $row['id'];
	?>
			<td><?=$val?></td>
	<?php } ?>
			<td>
				<a href="editUsers.php?id=<?=$row['id']?>"> EDIT </a>
				|
				<a href="deleteUser.php?id=<?=$row['id']?>"> DELETE </a>
				|
				<?php
				if ($row['status']=='Active')
				{ ?>
				<a href="deactivateUser.php?id=<?=$row['id']?>"> Deactivate </a>
				<?php } ?>
				<?php
				if ($row['status']=='Deactive')
				{ ?>
				<a href="activateUser.php?id=<?=$row['id']?>"> Activate </a>
				<?php } ?>

			</td>
		</tr>
	<?php } ?>
	<?=$deleteError?>
	<p align="center"><a href="addUser.php">Add User</a></p>
</table>
</body>
</html>

