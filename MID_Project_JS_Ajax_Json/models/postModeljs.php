<?php

$pid = $_GET['pid'];
$func = $_GET['func'];

if ($func == "allPost") {
    getAllPost();
}
if ($func == "deletePost") {
    deletePost($pid);
}

function getConnection()
{
    $host = 'localhost';
    $dbuser = 'root';
    $dbpassword = '';
    $dbname = 'wtproject';
    $con = mysqli_connect($host, $dbuser, $dbpassword, $dbname);
    return $con;
}

function getAllPost()
{
    $con = getConnection();
    $sql = "select * from posts";

    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result)) {
        while ($row = mysqli_fetch_assoc($result)) {
            $json[] = $row;
            
        }
        echo json_encode($json);
    } else {
        
        echo "empty";
    }
}

function deletePost($id)
{
    $con = getConnection();
    $sql = "delete from posts where postID='{$id}'";

    if (mysqli_query($con, $sql)) {
       echo "done";
    } else {
        echo "Delete operation failed";
    }
}
