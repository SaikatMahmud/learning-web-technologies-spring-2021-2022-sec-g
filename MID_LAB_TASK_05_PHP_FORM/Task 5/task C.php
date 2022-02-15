<?php 
function isChecked($value)
    {
        return (!empty($_REQUEST['check']) && in_array($value,$_REQUEST['check']));
    }
?>

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
					<input type="checkbox" name="check[]" value="SSC" <?php if(isChecked('SSC')) echo 'checked' ?>>SSC
				</td>
				<td>
					<input type="checkbox" name="check[]" value="HSC" <?php if(isChecked('HSC')) echo 'checked' ?>>HSC
				</td>
				<td>
					<input type="checkbox" name="check[]" value="BSc" <?php if(isChecked('BSc')) echo 'checked' ?>>BSc
				</td>
				<td>
					<input type="checkbox" name="check[]" value="MSc" <?php if(isChecked('MSc')) echo 'checked' ?>>MSc
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
