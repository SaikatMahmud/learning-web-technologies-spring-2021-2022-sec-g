<?php 

if(isset($_REQUEST['submit']))
{
		
	if($_REQUEST['name'] == null)
	{
		echo "invalid name!";
	}
	else
	{
		echo ($_REQUEST['name']);

	}
}

?>
