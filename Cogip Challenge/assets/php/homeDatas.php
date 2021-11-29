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
            '<tr>
                <td class="column1"><a href="#">'.$invoice['numbers'].'</a></td>
                <td class="column2"><a href="#">'.$invoice['society'].'</a></td>
                <td class="column3"><a href="#">'.$invoice['dates']  .'</a></td>
                <td class="column4"><a href="#">'.$invoice['type']   .'</a></td> 
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
            '<tr>
                <td class="column1"><a href="#">'.$contact['lastName'].' '.$contact['firstName'].'</a></td>
                <td class="column2"><a href="#">'.$contact['phone'].'</a></td>
                <td class="column3"><a href="#">'.$contact['email'].'</a></td>
                <td class="column4"><a href="#">'.$contact['society'].'</a></td> 
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
        '<tr>
            <td class="column1"><a href="#">'.$society['name'].'</a></td>
            <td class="column2"><a href="#">'.$society['vat'].'</a></td>
            <td class="column3"><a href="#">'.$society['country'].'</a></td>
            <td class="column4"><a href="#">'.$society['type'].'</a></td> 
        </tr>'
    ;   
}
//?=================================================
























?>