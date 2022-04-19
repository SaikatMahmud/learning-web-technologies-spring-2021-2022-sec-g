<html>

<head>
	<title>Posts (Admin)</title>
</head>

<body onload="getAllPost()">


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
		


<tbody id="postTable"></tbody>
	</table>
	<div id="emptyMsg"></div>
	<div id="msg"></div>
	<script src="../js/posts.js"></script>
</body>

</html>