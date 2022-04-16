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

function loginActive($username, $password)
{
    $con = getConnection();
    $sql = "select * from users where username='{$username}' and password='{$password}' and status='Active'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result)) {
        return $result;
    } else {
        return false;
    }
}

function loginDeac($username, $password)
{
    $con = getConnection();
    $sql = "select * from users where username='{$username}' and password='{$password}' and status='Deactive'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result)) {
        return $result;
    } else {
        return false;
    }
}


function signup($name, $username, $mobile, $email, $password, $dob, $gender)
{
    $con = getConnection();
    $sql = "insert into users values('','{$name}', '{$username}', '{$mobile}',' {$email}', '{$password}', '{$dob}', '{$gender}', '', 'Active', 'User')";

    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}

function getAllUser()
{
    $con = getConnection();
    $sql = "select id, name, username, email, mobile, dob, gender, status from users";

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

function deleteUser($id)
{
    $con = getConnection();
    $sql = "delete from users where id='{$id}'";

    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}

function uploadProPic($picname, $id)
{
    $con = getConnection();
    $sql = "update users set image='{$picname}' where id='{$id}'";

    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}

function deactiveUser($id)
{
    $con = getConnection();
    $sql = "update users set status='Deactive' where id='{$id}'";

    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}

function activeUser($id)
{
    $con = getConnection();
    $sql = "update users set status='Active' where id='{$id}'";

    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}

?>