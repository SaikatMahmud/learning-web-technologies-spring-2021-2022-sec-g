<?php
    session_start();
    if (!isset($_SESSION['current_user']) || $_SESSION['current_user'] !== 'ADMIN')
        header('location: ../auth/login.php');
?>