<?php
    session_start();
    //Destroy the session or unset it
    unset($_SESSION['user']);

    $_SESSION['login_message'] = 'Logged out successfully.';
    header('location: loginpage.php')
?>