<?php

$nameErr = $disErr = $priceErr = $priceErr2= $catErr="";
$name = $price = $dis = $religion = $cat="";


 if (isset ($_REQUEST['submit'])){



    if ($_REQUEST['nameErr']==null){

        echo "invalid Username";

    }else{

        echo "okay";

    }

 }
    
  

  if (empty($_POST["Discription"])) {
    $disErr = "Discription is required";
  } 
  else {
    $dis = test_input($_POST["dis"]);
  }


  

if (empty($_POST["price"])) {
    $priceErr = "price is required";
  }
   else if((strlen($_POST["price"]))<=1){

    $priceErr2="Must Enter biger than 1";
  }
   else {
    $price = test_input($_POST["price"]);

}

if (empty($_POST["cat"])) {
    $catErr = "Catagory is required";
  }

   else {
    $cat = test_input($_POST["cat"]);
  }



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
