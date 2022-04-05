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
			<th>Porduct ID</th>
			<th>Name</th>
			<th>Description</th>
			<th>Catagory</th>
			<th>ACTION</th>
		</tr>
    <tr>
    	<?php
    	require('header.php');
		$file = fopen('../models/products.txt', 'r');
		while (!feof($file)) {
		$products = fgets($file);
		$productList = explode("|", $products);
		?>
		<tr>
		<?php
		foreach($productList as $i => $var)
		{
			$id=$productList[0];
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

