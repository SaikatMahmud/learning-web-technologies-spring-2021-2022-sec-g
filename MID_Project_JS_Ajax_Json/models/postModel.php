<?php
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
        return $result;
    } else {
        return null;
    }
}



function getUserByID($id)
{
    $con = getConnection();
    $sql = "select * from users where id='{$id}'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result)) {
        return $result;
    } else {
        return null;
    }
}


function updateUser($id, $name, $username, $mobile, $email, $dob, $gender)
{
    $con = getConnection();
    $sql = "update users set name='{$name}', username='{$username}', mobile='{$mobile}',email='{$email}', dob='{$dob}', gender='{$gender}' where id='{$id}'";

    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}



function deletePost($id)
{
    $con = getConnection();
    $sql = "delete from posts where postID='{$id}'";

    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}
