<?php
function getConnection(){
    $host = 'localhost';
    $dbuser = 'root';
    $dbpassword = '';
    $dbname = 'wtproject';
    $con = mysqli_connect($host, $dbuser, $dbpassword, $dbname);
    return $con;
}


function getAllProducts(){
    $con = getConnection();
    $sql = "select * from products";
    
    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result)){
        return $result;
    }
    else{
        return null;
    }
}



function getProductByID($id){
    $con = getConnection();
    $sql = "select * from products where productID='{$id}'";
    $result = mysqli_query($con, $sql);
    
    if(mysqli_num_rows($result)){
        return $result;
        }
    else{
        return null;
        }
}


function editRatings($productID, $ratings){
    $con = getConnection();
    $sql = "update products set RATINGS='{$ratings}' where productID='{$productID}'";
    
    if(mysqli_query($con, $sql)){
        return true;
    }else{
        return false;
    }
}



function deleteProduct($id){
    $con = getConnection();
    $sql = "delete from products where productID='{$id}'";
    
    if(mysqli_query($con, $sql)){
        return true;
    }else{
        return false;
    }
}


?>