<?php
	require_once '../components/adminHeader.php';
	require_once '../model/userDataHandle.php';
	$user = getUser($_SESSION['current_user']);
    $users = getAllUsers();
?>
<html>
<head>
	<title>Userlist</title>
</head>
<body>

<h4 align="right"><a href="../auth/logout.php"> logout</a></h4>
	<a href="adminHome.php"> Back</a>

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
			if ($users !== null) {
				foreach ($users as $usr => $data) {
					if ($data['username'] !== $user['username']) {
						echo "<tr><td>{$data['id']}</td>
						<td>{$data['username']}</td>
						<td>{$data['pass']}</td>
						<td>{$data['mail']}</td>
						<td>
							<a href=\"../others/deleteAcc.php?toDel={$data['username']}&redUrl=../admin/userList.php\"> DELETE </a>
						</td></tr>";
					}
				}
			}
			else {
				echo "<tr><td colspan=\"5\">No Users Yet</td></tr>";
			}
		?>
		</tr>
	</table>
</body>
</html>

