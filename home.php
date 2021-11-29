<?php
    // require 'login.php'; 

    if (isset($_SESSION['id'])) {
        echo "hello world " . $_SESSION['id'];
    } 
    // else {
        // header("Location: login.php");
    // }
?>