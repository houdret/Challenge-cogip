<?php 

class SocietyManager extends Model{

    public function getSocieties(){
        // on va chercher la méthode getAll() pour récupérer toutes les données d'une table
        //getAll('nom de la table', 'nom de l'objet'); 
        $this->getBdd();
        return $this->getAll('societies', 'Society');

    }
}