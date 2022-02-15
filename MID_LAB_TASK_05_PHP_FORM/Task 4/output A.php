<?php 

if(isset($_REQUEST['submit']))
{
		
	if($_REQUEST['gender'] == null)
	{
		echo "invalid gender!";
	}
	else
	{
		echo ($_REQUEST['gender']);

	}
}

?>
