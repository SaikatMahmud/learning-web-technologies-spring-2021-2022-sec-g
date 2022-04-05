

<html>
<head>
	<title>Userlist</title>
</head>
<body>

	
<h4 align="right"><a href="../auth/logout.php"> logout</a></h4>
<a href="../admin/adminHome.php"> Back</a>

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
    	//require('header.php');
		require_once '../components/adminHeader.php';
		require_once '../model/userDataHandle.php';
		$user = getUser($_SESSION['current_user']);
	
		$file = fopen('../model/buyerseller.txt', 'r');
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

