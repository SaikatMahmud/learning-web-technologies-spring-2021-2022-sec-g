<?php 
$gender="";

if(isset($_REQUEST['submit']))
{
		
	if($_REQUEST['gender'] == null)
	{
		echo "invalid gender!";
	}
	else
	{
		$gender=$_REQUEST['gender'];

	}
}

?>

<html>
<head>
	
	<title>Task 4</title>
</head>
<body>
		
	<form method="GET" action="#">
		<fieldset style="width: 250px">
		<legend>GENDER</legend>
		<table border="0">
			<tr>
				<td>
					<input type="radio" name="gender" value="Male">Male
				</td>
				<td>
					<input type="radio" name="gender" value="Female">Female
				</td>
				<td>
					<input type="radio" name="gender" value="Other">Other
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="submit" value="Submit">
				</td>
			</tr>
		</table>
		</fieldset>
		<?php echo $gender; ?>
	</form>
</body>
</html>