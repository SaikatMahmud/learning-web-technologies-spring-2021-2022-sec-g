<?php
    session_start();
    require_once '../model/postDataHandle.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $publisher = $_SESSION['current_user'];
        $img = $_FILES['postImg']['name'];
        $upload_dir = '../assets/';
        $target_file = $upload_dir . basename($_FILES['postImg']['name']);
        move_uploaded_file($_FILES["postImg"]["tmp_name"], $target_file);
        $desc = $_POST['postDesc'];
        $post = array('publisher' => $publisher, 'desc'=> $desc, 'img'=> $img);
        addPost($post);
        header('location: ../views/dashboard.php');
    }
?>