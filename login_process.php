<?php
    include 'login.php';

    $servername = "localhost";
    $bddUsername = "root";
    $bddPassword = "";

    // get input by the page "login.php"
    $logUsername = filter_var($_POST['login'], FILTER_SANITIZE_STRING);
    var_dump($logUsername);
    $logPassword = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
    var_dump($logPassword);

    try {
        // connect to database
        $bdd = new PDO("mysql:host=$servername;dbname=cogip", $bddUsername, $bddPassword);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $bdd -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);


        // request user id in the database
        $result = $bdd->prepare('SELECT id FROM users WHERE login = ? AND password = ?');
        $result->execute([$logUsername, $logPassword]);
        
        $data = $result->fetch(PDO::FETCH_ASSOC);

        // Start session and put in this the user id
        $_SESSION['id'] = $data['id'];

        // End of connection with database
        $result->closeCursor();

        // Redirect to homepage and end of script
        header('Location: home.php');
        exit();
    } catch (PDOexception $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    

?>