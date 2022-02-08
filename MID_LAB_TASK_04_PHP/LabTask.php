<?php

	echo "Task 1"."\n";
	function rectangle($length, $width)
	{
		echo 2*($length+$width)."\n";
	}
	rectangle(7,4);
	echo "\n";


	echo "Task 2"."\n";
	function vat($amount)
	{
		echo ($amount*0.15)."\n";
	}
	vat(1000);
	echo "\n";


	echo "Task 3"."\n";
	function oddEven ($num)
	{
		if ($num%2==0)
		{
			echo "true"."\n";
		}
		else
			echo "false"."\n";
	}
	oddEven(13);
	echo "\n";

	echo "Task 4"."\n";
	function numbers($num1, $num2, $num3)
	{
		if($num1>$num2)
		{
			if ($num1>$num3)
				{echo "num1 is greater";}
			else
				echo "num3 is greater";
		}
		else if ($num2>$num3)
			{echo "num2 is greater";}
		else
			echo "num3 is greater";
	}
	numbers(2,4,3);
	echo "\n";
	echo "\n";

	echo "Task 5"."\n";
	function oddNumbers()
	{
		echo "Odd number 1 to 100: ";
		for ($i=10; $i <=100 ; $i++) { 
			if($i%2!=0)
				{echo ($i.",");}
		}
	}
	oddNumbers();
	echo "\n";
	echo "\n";
	

	echo "Task 6"."\n";
	function search($element)
	{
		$elements = array("Dhaka","Bogra","Ctg","Raj");
		$found;
		$count=0;
		for ($i=0; $i <sizeof($elements) ; $i++) { 
			if($element==$elements)
			{
				$found=$element;
				$count++;
			}
		}
		if($count==0)
			{echo "Element not found";}
		else
			{echo "Element found";}

	}
	search("Bogra");
	echo "\n";
	echo "\n";
//Task 6 has an issue.


	echo "Task 7"."\n";
	function taskSeven()
	{
	  for ($i = 0; $i <=3; ++$i)
	  {
    	 for ($j = 1; $j <= $i; ++$j)
      		{
         		echo ("* ");
      		}
     	 echo ("\n");
   	   }

	  for ($i = 0; $i <=3; ++$i)
	  {
    	 for ($j = 1; $j <= $i; ++$j)
      		{
         		echo ($j." ");
      		}
     	 echo ("\n");
   	   }

	}
	taskSeven();
	echo "\n";
	echo "\n";


?>
