<?php
	require_once '../components/adminHeader.php';
	require_once '../model/userDataHandle.php';
    $user = getUser($_SESSION['current_user']);
?>
<html>
<head>
	<title>Your Profile (admin)</title>
</head>
<body>
	<h1> not done yet! </h1>

	<h4 align="right"><a href="../auth/logout.php"> logout</a></h4>
	<a href="adminHome.php"> Back</a>
	<br>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>USER NAME</th>
			<th>PASSWORD</th>
			<th>EMAIL</th>
			<th>ACTION</th>
		</tr>
    <tr>

    	<?php
			foreach ($user as $usr => $data)
				echo "<td>{$data}</td>";
		?>
		<td>
			<a href="delete.php?toDel=<?php echo $user['username']?>"> DELETE </a>
		</td>

		
</tr>
</table>
</body>
</html>

