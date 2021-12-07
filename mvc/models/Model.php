<?php
abstract class Model{

    private static $_bdd;
    
    // private $db_host = 'localhost';
    // private $db_name = 'cogip';
    // private $db_user = 'root';
    // private $db_pass = '';
    
    //* ==========| Instancie la connexion à la DB |==========
    private static function setBdd(){
        // self::$_bdd = new PDO('mysql:host='.$db_host.';dbname='.$db_name.';charset=utf8',$db_user, $db_pass );
        
        self::$_bdd = new PDO('mysql:host=localhost;dbname=cogip;charset=UTF8','root','');
        self::$_bdd -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        // self::$_bdd -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }

    //* ==========| Récupére la connexion à la DB |==========
    protected function getBdd(){
        //on fait une vérification si c'est null alors on met à jour la bdd avec la méthode setBdd
        if(self::$_bdd == null)$this->setBdd();
        return self::$_bdd;
    }

    //* ==========| Récupére toutes les datas de la Bdd |==========
    // 1er méthode pour récuper toutes les données d'une table
    protected function getAll($tableName, $objectName){

        $dataTable = [];
        // $this->getBdd()
        // self::$_bdd->
        $req = self::getBdd()->prepare('SELECT * FROM '.$tableName.' ORDER BY id DESC');
        $req->execute();
        while( $data = $req->fetch(PDO::FETCH_ASSOC)){
            $dataTable[] = new $objectName($data);
        }
        return $dataTable;
        $req->closeCursor();
    }
}


