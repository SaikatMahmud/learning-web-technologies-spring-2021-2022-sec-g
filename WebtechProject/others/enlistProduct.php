<?php 
//session_start();

if(isset($_REQUEST['submit'])){
	$id=1;
	$name=$_REQUEST['name'];
	$description = $_REQUEST['description'];
	$price = $_REQUEST['price'];
	$cat = $_REQUEST['cat'];


	if($name != null && $description != null && $price != null && $cat !=null){
		
		//$user = ['username'=> $username, 'password'=>$password, 'email'=>$email];
		//$_SESSION['user'] = $user;

		$productDetails ="\r\n".$id. "|". $name." |".$description." |".$price." |".$cat;
		$file = fopen('../model/productsEntry.txt', 'a');
		fwrite($file, $productDetails);
		$id++;
		
		//header('location: ../views/login.php');

	}else{
		echo "null submission ....";
	}
}

?>