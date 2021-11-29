<?php 
//* ==========| Connect DB |==========
include('assets\php\connect_db.php');



//! ==========| Requete SQL for Contacts |==========

    $sqlContact = 'SELECT * FROM contacts ORDER BY `id` ASC';
    $reqContact = $db->query($sqlContact);

    //* ==========| Recup les Datas |==========
    $contacts = $reqContact -> fetchALL();

    //* ==========| Stock Datas Into a variable |==========
    // stock  les datas dans une variable que l'on affiche dans l'HTML
    $contactDirectory = '';
    foreach($contacts as $contact ){
        $contactDirectory .= 
            '<tr>
                <td class="column1"><a href="#">'.$contact['lastName'].' '.$contact['firstName'].'</a></td>
                <td class="column2"><a href="#">'.$contact['phone'].'</a></td>
                <td class="column3"><a href="#">'.$contact['email'].'</a></td>
                <td class="column4"><a href="#">'.$contact['society'].'</a></td> 
            </tr>'
        ;   
    }
//?=================================================

//! ==========| Requete SQL for Clients |==========

$sqlClient = 'SELECT * FROM societies WHERE type="clients" ORDER BY `id` ASC ';
$reqClient = $db->query($sqlClient);

//* ==========| Recup les Datas |==========
$clients = $reqClient -> fetchALL();

//* ==========| Stock Datas Into a variable |==========
// stock  les datas dans une variable que l'on affiche dans l'HTML
$clientDirectory = '';
foreach($clients as $client ){
    $clientDirectory .= 
        '<tr>
            <td class="column1"><a href="#">'.$client['name'].'</a></td>
            <td class="column2"><a href="#">'.$client['vat'].'</a></td>
            <td class="column3"><a href="#">'.$client['country'].'</a></td>
        </tr>'
    ;   
}
//?=================================================

//! ==========| Requete SQL for Providers |==========

$sqlProvider = 'SELECT * FROM societies WHERE type="provider" ORDER BY `id` ASC ';
$reqProvider = $db->query($sqlProvider);

//* ==========| Recup les Datas |==========
$providers = $reqProvider -> fetchALL();

//* ==========| Stock Datas Into a variable |==========
// stock  les datas dans une variable que l'on affiche dans l'HTML
$providerDirectory = '';
foreach($providers as $provider ){
    $providerDirectory .= 
        '<tr>
            <td class="column1"><a href="#">'.$provider['name'].'</a></td>
            <td class="column2"><a href="#">'.$provider['vat'].'</a></td>
            <td class="column3"><a href="#">'.$provider['country'].'</a></td>
        </tr>'
    ;   
}
//?=================================================

//! ==========| Requete SQL for Invoices |==========

$sqlInvoice = 'SELECT * FROM invoices ORDER BY `dates` ASC' ;
$reqInvoice = $db->query($sqlInvoice);

//* ==========| Recup les Datas |==========
$invoices = $reqInvoice -> fetchALL();

//* ==========| Stock Datas Into a variable |==========
// stock  les datas dans une variable que l'on affiche dans l'HTML
$invoicesDirectory = '';
foreach($invoices as $invoice ){
    $invoicesDirectory .= 
        '<tr>
            <td class="column1"><a href="#">'.$invoice['numbers'].'</a></td>
            <td class="column2"><a href="#">'.$invoice['dates'].'</a></td>
            <td class="column3"><a href="#">'.$invoice['society']  .'</a></td>
            <td class="column4"><a href="#">'.$invoice['type']   .'</a></td> 
        </tr>'
    ;   
}
//?=================================================


















?>