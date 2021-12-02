<?php
    // require 'login.php'; 
    session_start();
    if (isset($_SESSION['id'])) {
        echo "hello world " . $_SESSION['id'];
    } 
    // else {
        // header("Location: login.php");
    // }
?>