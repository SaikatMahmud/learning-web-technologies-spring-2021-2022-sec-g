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
