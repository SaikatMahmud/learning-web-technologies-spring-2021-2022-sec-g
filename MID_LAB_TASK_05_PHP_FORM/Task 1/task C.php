<?php 
$name="";

if(isset($_REQUEST['submit']))
{
		
	if($_REQUEST['name'] == null)
	{
		echo "invalid name!";
	}
	else
	{
		$name=$_REQUEST['name'];

	}
}

?>

<html>
<head>
	
	<title>Task 1</title>
</head>
<body>
		
	<form method="GET" action="#">
		<fieldset style="width: 250px">
		<legend>NAME</legend>
		<table border="0">
			<tr>
				<td>
					<input type="text" name="name" value="<?=$name ?>">
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="submit" value="Submit">
				</td>
			</tr>
		</table>
		</fieldset>
	</form>
</body>
</html>