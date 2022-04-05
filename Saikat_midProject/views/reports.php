
<html>
<head>
	<title>Userlist</title>
</head>
<body>

<h4 align="right"><a href="../controllers/logout.php"> logout</a></h4>
	<a href="adminHome.php?"> Back</a>
</br>
</body>
</html>

<?php
    	require('header.php');
		$file = fopen('../models/reports.txt', 'r');
		while (!feof($file)) {
		$reports = fgets($file);
		$reports = explode("|", $reports);
		print_r($reports);
	}
?>
