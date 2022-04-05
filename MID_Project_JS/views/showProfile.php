<?php
require('header.php');
require('../models/userModel.php');
$id = $_GET['id'];
$userName = $_GET['name'];
$user = getUserByID($id);
$user = mysqli_fetch_assoc($user);
//print_r($user);
// $printUpdate="";
// $printUpdate=$_GET['msg'];

?>

<html>

<head>
    <title>Your Profile</title>
</head>

<body>

    <h4 align="right"><a href="../controllers/logout.php"> logout</a></h4>
    <a href="home.php?userid=<?= $id ?>&name=<?= $userName ?>"> Back</a>
    <br></br>

    <p align="center"><img src="../assets/<?= $user['IMAGE'] ?>" width="150" height="150"></p>
    <table border="1">
        <tr>
            <td>Name: </td>
            <td>
                <?= $user['NAME'] ?>
            </td>
        </tr>
        <tr>
            <td>Username: </td>
            <td>
                <?= $user['USERNAME'] ?>
            </td>
        </tr>
        <tr>
            <td>Email: </td>
            <td>
                <?= $user['EMAIL'] ?>
            </td>
        </tr>
        <tr>
            <td>Mobile: </td>
            <td>
                <?= $user['MOBILE'] ?>
            </td>
        </tr>
        <tr>

            <td>DOB: </td>
            <td>
                <?= $user['DOB'] ?>
            </td>
        </tr>

        <tr>
            <td>Gender: </td>
            <td>
                <?= $user['GENDER'] ?>
            </td>
        </tr>
    </table>
    <br></br>
    <a href="userProfile.php?id=<?= $id ?>&name=<?= $userName ?>">Edit your profile</a>

</body>

</html>