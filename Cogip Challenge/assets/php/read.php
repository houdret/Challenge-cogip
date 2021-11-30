<!-- ====================| Link row effect with JS |==================== -->
<script src="assets\js\clickRow.js"></script>


<?php 
//* ==========| Connect DB |==========
include('connect_db.php');



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
            '<tr data-href="assets\php\detailContact.php">
                <td class="column1">'.$contact['lastName'].' '.$contact['firstName'].'</td>
                <td class="column2">'.$contact['phone']  .'</td>
                <td class="column3">'.$contact['email']  .'</td>
                <td class="column4">'.$contact['society'].'</td> 
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
        '<tr data-href="societies.php">
            <td class="column1">'.$client['name']   .'</td>
            <td class="column2">'.$client['vat']    .'</td>
            <td class="column3">'.$client['country'].'</td>
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
        '<tr data-href="societies.php">
            <td class="column1">'.$provider['name']   .'</td>
            <td class="column2">'.$provider['vat']    .'</td>
            <td class="column3">'.$provider['country'].'</td>
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
        '<tr data-href="invoices.php">
            <td class="column1">'.$invoice['numbers'].'</td>
            <td class="column2">'.$invoice['dates']  .'</td>
            <td class="column3">'.$invoice['society'].'</td>
            <td class="column4">'.$invoice['type']   .'</td> 
        </tr>'
    ;   
}
//?=================================================


















?>