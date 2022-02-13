<?php 

if(isset($_REQUEST['submit']))
{
		
	if($_REQUEST['email'] == null)
	{
		echo "invalid email!";
	}
	else
	{
		echo ($_REQUEST['email']);

	}
}

?>
