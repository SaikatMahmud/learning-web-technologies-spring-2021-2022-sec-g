<?php 
	require('header.php');
	require_once('../models/buyer_sellerModel.php');
	$id= $_GET['id'];
	$deleted= deleteSeller($id);
	if($deleted)
	{
		header("location: buyerSellerList.php");
	}
	else{
		header("location:  buyerSellerList.php?msgS=deleteError");
	}

?>