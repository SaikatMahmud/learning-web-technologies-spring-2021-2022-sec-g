<?php 

$email="";
if(isset($_REQUEST['submit']))
{
		
	if($_REQUEST['email'] == null)
	{
		echo "invalid email!";
	}
	else
	{
		$email=$_REQUEST['email'];

	}
}

?>

<html>
<head>
	
	<title>Task 2</title>
</head>
<body>
		
	<form method="GET" action="#">
		<fieldset style="width: 250px">
		<legend>EMAIL</legend>
		<table border="0">
			<tr>
				<td>
					<input type="text" name="email" value="">
				</td>
				<td>
					i
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="submit" value="Submit">
				</td>
			</tr>
		</table>
		</fieldset>
	<?php echo $email; ?>
	</form>

</body>
</html>