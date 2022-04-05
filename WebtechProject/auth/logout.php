<?php
    session_unset();
    setcookie('current_user', $user['username'], time()-300, '/');
    header('location: ../home.php');
?>