<?php 
$dob="";

if(isset($_REQUEST['submit']))
{
		
	if($_REQUEST['dob'] == null)
	{
		echo "invalid DOB!";
	}
	else
	{
		$dob= $_REQUEST['dob'];

	}
}

?>


<html>
<head>
	
	<title>Task 3</title>
</head>
<body>
		
	<form method="GET" action="#">
		<fieldset style="width: 250px">
		<legend>DATE OF BIRTH</legend>
		<table border="0">
			<tr>
				<td>
					<input type="date" name="dob" value="">
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="submit" value="Submit">
				</td>
			</tr>
		</table>
		</fieldset>
		<?php echo $dob; ?>
	</form>
</body>
</html>