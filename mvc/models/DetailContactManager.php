<?php 

class DetailContactManager extends Model{

    public function getDetailContact(){
        // on va chercher la méthode getDetail() pour récupérer toutes les données de la table
        //getDetail('nom de la table', 'nom de l'objet', l'id); 
        $this->getBdd();
        // $test = $_GET['id'];
        // $test = $url[1];
        // $test = $_REQUEST[$url[1]];
        $test = 1;
        return $this->getDetail('contacts','DetailContact',$test);
    }

}


