<?php
    require_once '../model/postDataHandle.php';
    deletePost($_GET['toDel']);
    if (!isset($_GET['redUrl']))
        header('location: ../home.php');
    else
        header("location: {$_GET['redUrl']}");
?>