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
			<th>Role</th>
			<th>ACTION</th>
		</tr>
    <tr>
    	<?php
    	require('header.php');
		$file = fopen('../models/buyerseller.txt', 'r');
		while (!feof($file)) {
		$buyerseller = fgets($file);
		$buyersellerList = explode("|", $buyerseller);
		?>
		<tr>
		<?php
		foreach($buyersellerList as $i => $var)
		{
			$id=$buyersellerList[0];
		?>
			<td><?=$var?></td>

		<?php } ?>
			<td>
				<a href="delete.php?id=<?=$id?>"> DELETE </a>
			</td>
		<?php } ?>
		
</tr>
</table>
</body>
</html>

