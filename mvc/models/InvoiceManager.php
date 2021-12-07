<?php 

class InvoiceManager extends Model{

    public function getInvoices(){
        // on va chercher la méthode getAll() pour récupérer toutes les données d'une table
        //getAll('nom de la table', 'nom de l'objet'); 
        $this->getBdd();
        return $this->getAll('invoices', 'Invoice');

    }
}