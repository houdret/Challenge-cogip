<?php
//* ==========| Setup const DB |==========

    define('DBHOST', 'localhost');
    define('DBuser', 'root');
    define('DBPASS', '');
    define('DBNAME', 'cogip');

//* ==========| Connect DSN |==========
    //Data Source Name
    
    $dsn = 'mysql:host='.DBHOST.';dbname='.DBNAME.';charset=utf8';

//* ==========| Connect DB |==========

    try {
        $db = new PDO($dsn, DBuser, DBPASS);
        $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        
    } catch (PDOException $e) {
        die('Error: '.$e->getMessage());
    }

?>