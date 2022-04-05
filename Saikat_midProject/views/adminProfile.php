<?php
require('header.php');
$adminid= $_GET['id'];
$file = fopen('../models/adminList.txt', 'r');
	while (!feof($file))
	{
		$admin = fgets($file);
		$admin = explode("|", $admin);
		if (trim($admin[0]=$adminid))
		{
			$printadmin=$admin[0];
		}
	}
		

?>
<html>
<head>
	<title>Your Profile (admin)</title>
</head>
<body>
	<h1> not done yet! </h1>

	<h4 align="right"><a href="../controllers/logout.php"> logout</a></h4>
	<a href="adminHome.php?"> Back</a>


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
		//foreach($printadmin as $i => $var)
		//{
			//$id=$printadmin[0];
    	print_r($printadmin);
		?>
			

	   
			<td>
				<a href="delete.php?id=<?=$id?>"> DELETE </a>
			</td>

		
</tr>
</table>
</body>
</html>

