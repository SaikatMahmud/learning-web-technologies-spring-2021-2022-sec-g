<?php
    require_once '../model/userDataHandle.php';
    deleteUser($_GET['toDel']);
    if (!isset($_GET['redUrl']))
        header('location: ../home.php');
    else
        header("location: {$_GET['redUrl']}");
?>