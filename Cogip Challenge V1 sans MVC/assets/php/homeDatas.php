<?php 
//* ==========| Connect DB |==========
include('assets\php\connect_db.php');



//! ==========| Requete SQL for Invoices |==========

    $sqlInvoice = 'SELECT * FROM invoices ORDER BY `dates` ASC LIMIT 0,5';
    $reqInvoice = $db->query($sqlInvoice);

    //* ==========| Recup les Datas |==========
    $invoices = $reqInvoice -> fetchALL();

    //* ==========| Stock Datas Into a variable |==========
    // stock  les datas dans une variable que l'on affiche dans l'HTML
    $datasInvoices = '';
    foreach($invoices as $invoice ){
        $datasInvoices .= 
            '<tr data-href="invoices.php">
                <td class="column1">'.$invoice['numbers'].'</td>
                <td class="column2">'.$invoice['society'].'</td>
                <td class="column3">'.$invoice['dates']  .'</td>
                <td class="column4">'.$invoice['type']   .'</td> 
            </tr>'
        ;   
    }
//?=================================================

//! ==========| Requete SQL for Contacts |==========

    $sqlContact = 'SELECT * FROM contacts ORDER BY `id` ASC LIMIT 0,5';
    $reqContact = $db->query($sqlContact);

    //* ==========| Recup les Datas |==========
    $contacts = $reqContact -> fetchALL();

    //* ==========| Stock Datas Into a variable |==========
    // stock  les datas dans une variable que l'on affiche dans l'HTML
    $datasContacts = '';
    foreach($contacts as $contact ){
        $datasContacts .= 
            '<tr data-href="assets\php\detailContact.php">
                <td class="column1">'.$contact['lastName'].' '.$contact['firstName'].'</td>
                <td class="column2">'.$contact['phone']  .'</td>
                <td class="column3">'.$contact['email']  .'</td>
                <td class="column4">'.$contact['society'].'</td> 
            </tr>'
        ;   
    }
//?=================================================

//! ==========| Requete SQL for Societies |==========

$sqlSocietie = 'SELECT * FROM societies ORDER BY `id` ASC LIMIT 0,5';
$reqSocietie = $db->query($sqlSocietie);

//* ==========| Recup les Datas |==========
$societies = $reqSocietie -> fetchALL();

//* ==========| Stock Datas Into a variable |==========
// stock  les datas dans une variable que l'on affiche dans l'HTML
$datasSocieties = '';
foreach($societies as $society ){
    $datasSocieties .= 
        '<tr data-href="societies.php">
            <td class="column1">'.$society['name']   .'</td>
            <td class="column2">'.$society['vat']    .'</td>
            <td class="column3">'.$society['country'].'</td>
            <td class="column4">'.$society['type']   .'</td> 
        </tr>'
    ;   
}
//?=================================================
























?>