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
			<th>Username</th>
			<th>Post</th>
			<th>ACTION</th>
		</tr>
    <tr>
    	<?php
    	require('header.php');
		$file = fopen('../models/posts.txt', 'r');
		while (!feof($file)) {
		$posts = fgets($file);
		$postList = explode("^", $posts);
		?>
		<tr>
		<?php
		foreach($postList as $i => $var)
		{
			$postid=$postList[0];
		?>
			<td><?=$var?></td>

		<?php } ?>
			<td>
				<a href="delete.php?id=<?=$postid?>"> DELETE </a>
			</td>
		<?php } ?>
		
</tr>
</table>
</body>
</html>
