<html>
<head>
	<title>Userlist</title>
</head>
<body>

	<a href="home.php"> Back</a> |
	<a href="../controllers/logout.php"> logout</a>

	<br><br>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>PASSWORD</th>
			<th>EMAIL</th>
			<th>ACTION</th>
		</tr>
    <tr>
    	<?php
    	require('header.php');
		$file = fopen('../models/user.txt', 'r');
		while (!feof($file)) {
		$user = fgets($file);
		$userList = explode("|", $user);
		?>
		<tr>
		<?php
		foreach($userList as $i => $var)
		{
			$id=$userList[0];
		?>
			<td><?=$var?></td>

		<?php } ?>
			<td>
				<a href="edit.php?id=<?=$id?>"> EDIT </a> | 
				<a href="delete.php?id=<?=$id?>"> DELETE </a>
			</td>
		<?php } ?>
		
</tr>
</table>
</body>
</html>

