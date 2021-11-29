<?php
    include 'login.php';

    $servername = "localhost";
    $bddUsername = "root";
    $bddPassword = "";

    // get input by the page "login.php"
    $logUsername = filter_var($_POST['login'], FILTER_SANITIZE_STRING);
    $logPassword = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

    try {
        // // connect to database
        // $bdd = new PDO("mysql:host=$servername;dbname=cogip", $username, $password);
        // $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // // request user id in the database
        // $result = $bdd->prepare('SELECT UsId FROM Users WHERE UsLogin = '$logUsername' AND UsPassword = '$logPassword);
        // $result = prepare();

        if ($logUsername == "test" AND $logPassword == "test") {
            $result = 1;
        } else {
            $result = "nope";
        }
        
        echo $result;

        // Start session and put in this the user id
        session_start();
        $_SESSION['id'] = $result;

        // // End of connection with database
        // $result->closeCursor();

        // Redirect to homepage and end of script
        header('Location: home.php');
        exit();
    } catch (PDOexception $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    

?>