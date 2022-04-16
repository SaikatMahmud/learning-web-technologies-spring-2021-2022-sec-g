<html>

<head>
	<title>Posts (Admin)</title>
</head>

<body>


	<h4 align="right"><a href="../controllers/logout.php"> logout</a></h4>
	<a href="adminHome.php?"> Back</a>

	<br><br>
	<table border="1">
		<tr>
			<th>PostID</th>
			<th>User ID</th>
			<th>Post Text</th>
			<th>ACTION</th>
		</tr>
		<tr>


			<?php
			$deleteError = "";
			if (isset($_GET['msg'])) {
				$deleteError = "Delete operation failed !";
			}
			require('header.php');
			require('../models/postModel.php');
			$posts = getAllPost();
			?>
		<tr>
			<?php
			if ($posts != null) {
				while ($row = mysqli_fetch_assoc($posts)) {
					foreach ($row as $i => $val) {
						//print_r($row);
						//echo $row['id'];
			?>
						<td><?= $val ?></td>
					<?php } ?>
					<td>
						<a href="deletePost.php?id=<?= $row['postID'] ?>"> DELETE </a>
					</td>
		</tr>
<?php }
			} else
				echo "No post found"; ?>
<?= $deleteError ?>

</tr>
	</table>
</body>

</html>