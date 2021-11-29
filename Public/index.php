<?php
require '../App/Autoloader.php';
App\Autoloader::register();

if (isset($_GET['p'])){
    $p = $_GET['p'];
}else{
    $p = 'home';
}

ob_start();
if($p === 'home'){
    require '../Pages/home.php';
} elseif ($p === 'companies'){
    require '../Pages/companies.php';
}elseif ($p === 'details_contacts'){
    require '../Pages/details_contacts.php';
}
elseif ($p === 'details_invoices') {
    require '../Pages/details_invoices.php';
}
elseif ($p === 'invoices') {
    require '../Pages/invoices.php';
}
elseif ($p === 'lists_contacts') {
    require '../Pages/lists_contacts.php';
}
elseif ($p === 'new_company') {
    require '../Pages/new_company.php';
}
elseif ($p === 'new_contact') {
    require '../Pages/new_contact.php';
}
elseif ($p === 'new_invoice') {
    require '../Pages/new_invoice.php';
}
$content = ob_get_clean();
require '../Pages/Templates/default.php';
