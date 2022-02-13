<?php 

if(isset($_REQUEST['submit']))
{
		
	if($_REQUEST['dob'] == null)
	{
		echo "invalid DOB!";
	}
	else
	{
		echo ($_REQUEST['dob']);

	}
}

?>
