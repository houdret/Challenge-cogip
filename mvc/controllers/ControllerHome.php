<?php
require_once('views/View.php');

class ControllerHome {

    private $_contactManager; // nouvelle instance pour accéder  aux fonctions
    private $_invoiceManager;
    private $_societyManager;
    private $_view;

    //on lance le constructeur et on récupère l'URL et si le test est ok on appel la fonction private
    public function __construct($url){
        if (isset($url) && count(array($url) ) > 1) {
            throw new Exception('Page not found');
        } else {
            // $this->contacts();
            // $this->invoices();
            $this->home();
        }
    }

<<<<<<< HEAD
=======

>>>>>>> 9003985e05be6c4fd3aabbf42bc58974e92b7fac
    //  //* ==========| Home |==========
    private function home(){

        //* ==========| Contacts |==========
        $this->_contactManager = new ContactManager; 
        // getContacts() c'est la méthode extand dans le datasManager
        $contacts = $this->_contactManager->getContacts();


        //* ==========| Invoices |==========
        $this->_invoiceManager = new InvoiceManager; 
        // getInvoices() c'est la méthode extand dans le datasManager
        $invoices = $this->_invoiceManager->getInvoices();

        //* ==========| Societies |==========
        $this->_societyManager = new SocietyManager; 
        // getSocieties() c'est la méthode extand dans le datasManager
        $societies = $this->_societyManager->getSocieties();

     
        //* ==========| Home datas |==========
        $this->_view = new View('Home');
        $this->_view->generate(array(
            'invoices'  => $invoices,
            'contacts'  => $contacts,
            'societies' => $societies
        ));
    }


    //  //* ==========| Contacts |==========
    // private function contacts(){
    //     $this->_contactManager = new ContactManager; 
    //     // getContacts() c'est la méthode extand dans le datasManager
    //     $contacts = $this->_contactManager->getContacts();

    //     $this->_view = new View('Home');
    //     $this->_view->generate(array('contacts' => $contacts));
    // }

    //  //* ==========| Invoices |==========
    // private function invoices(){
    //     $this->_invoiceManager = new InvoiceManager; 
    //     // getInvoices() c'est la méthode extand dans le datasManager
    //     $invoices = $this->_invoiceManager->getInvoices();

    //     $this->_view = new View('Home');
    //     $this->_view->generate(array('invoices' => $invoices));
    // }
    // //* ==========| Societies |==========
    // private function societies(){
    //     $this->_societyManager = new SocietyManager; 
    //     // getSocieties() c'est la méthode extand dans le datasManager
    //     $societies = $this->_societyManager->getSocieties();

    //     $this->_view = new View('Home');
    //     $this->_view->generate(array('societies' => $societies));
    // }
}


