<?php
	require_once '../components/adminHeader.php';
	require_once '../model/userDataHandle.php';
	require_once '../model/postDataHandle.php';
    $user = getUser($_SESSION['current_user']);
	$posts = getAllPosts();
?>
<html>
<head>
	<title>Posts <?php echo $user['username'] ?></title>
</head>
<body>

	
	<h4 align="right"><a href="../auth/logout.php"> logout</a></h4>
	<a href="adminHome.php"> Back</a>

	<br><br>
	<table border="1">
		<tr>
			<th>PostID</th>
			<th>Username</th>
			<th>Post</th>
			<th>ACTION</th>
		</tr>
    	<?php
			if (count($posts) > 0) {
				foreach ($posts as $postId => $post) {
					echo "<tr><td>{$postId}</td>
					<td>{$post['publisher']}</td>
					<td>{$post['desc']}</td>
					<td>
						<a href=\"../others/deletePost.php?toDel={$postId}&redUrl=../admin/viewPostAdmin.php\"> DELETE </a>
					</td></tr>";
				}
			}
			else
				echo "<tr><td colspan=\"4\"> No Posts Yet </td></tr>";
		?>
</table>
</body>
</html>
