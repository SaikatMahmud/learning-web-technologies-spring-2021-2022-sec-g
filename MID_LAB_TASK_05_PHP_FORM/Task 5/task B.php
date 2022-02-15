<html>
<head>
	
	<title>Task 5</title>
</head>
<body>
		
	<form method="GET" action="#">
		<fieldset style="width: 250px">
		<legend>GENDER</legend>
		<table border="0">
			<tr>
				<td>
					<input type="checkbox" name="check[]" value="SSC">SSC
				</td>
				<td>
					<input type="checkbox" name="check[]" value="HSC">HSC
				</td>
				<td>
					<input type="checkbox" name="check[]" value="BSc">BSc
				</td>
				<td>
					<input type="checkbox" name="check[]" value="MSc">MSc
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="submit" value="Submit">
				</td>
			</tr>
		</table>
		</fieldset>
<?php 
if(isset($_REQUEST['submit']))
{
		
	if($_REQUEST['check'] == null)
	{
		echo "select box(s)!";
	}
	else
	{
		foreach($_REQUEST['check'] as $value)
    		{
     			echo $value.'<br>';
   			}

	}
}
?>
	</form>
</body>
</html>
