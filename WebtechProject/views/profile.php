<?php
	session_start();
	$current_user = $_SESSION['current_user'];
	$title = $_GET['username'];
	require_once '../components/header.php';
	require_once '../model/userDataHandle.php';
	require_once '../model/postDataHandle.php';
    $user = getUser($_GET['username']);
	$posts = getUserPosts($user['username']);
?>
<html>
<head>
	<title>Your Profile <?php echo $user['username'] ?></title>
</head>
<body>
	<h1><?php echo $user['username'] ?></h1>

	<h4 align="right"><a href="../auth/logout.php"> logout</a></h4>
	<a href="dashboard.php"> Back</a>
	<br>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>USER NAME</th>
			<?php
				if ($current_user === $user['username'])
					echo "<th>PASSWORD</th>
						<th>EMAIL</th>
						<th>ACTION</th>"
			?>
		</tr>
    <tr>
		<?php
			echo "<td>{$user['id']}</td>
					<td>{$user['username']}</td>";
			if ($current_user === $user['username']) {
				echo "<td>{$user['pass']}</td>
				<td>{$user['email']}</td>
				<td>
					<a href=\"delete.php?toDel={$user['username']}\"> DELETE </a>
				</td>";
			}
		?>
	</tr>
</table>
<h3>Posts:</h3>
<table border="1">
	<tr>
		<th>PostID</th>
		<th>Username</th>
		<?php
		if ($current_user === $user['username'])
			echo "<th>Post</th> <th>ACTION</th>";
		?>
	</tr>
	<?php
		if (count($posts) > 0) {
			foreach ($posts as $postId => $post) {
				echo "<tr><td>{$postId}</td>
				<td>{$post['publisher']}</td>
				<td>{$post['desc']}</td>";
				if ($current_user === $user['username'])
					echo "<td>
						<a href=\"../others/deletePost.php?toDel={$postId}&redUrl=../views/profile.php\"> DELETE </a>
					</td>";
				echo "</tr>";
			}
		}
		else
			echo "<tr><td colspan=\"4\"> No Posts Yet </td></tr>";
	?>
</table>
</body>
</html>

