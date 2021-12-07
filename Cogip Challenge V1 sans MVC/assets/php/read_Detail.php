<?php 
//* ==========| Connect DB |==========
include('connect_dataBase.php');






//* ==========| Setup Variable for Contacts |==========
$contactDetailName = $contactDetailSociety = $contactDetailEmail = $contactDetailPhone = $contactDetail = ''; 

//! ==========| Read Detail for Contacts |==========

if(isset($_GET['id'])){
    $contactSelected = $_GET['id'];
    
    $sqlTest = "SELECT *
                FROM contacts
                LEFT JOIN invoices ON contacts.society = invoices.society
                WHERE contacts.id = $contactSelected
            ";
    
    $results = $db->query($sqlTest);
    
    if($results->rowCount() > 0){
        $rows  = $results->fetchAll(PDO::FETCH_ASSOC);
        
        //* ====================| Infos du contact |==================== 
        $contactDetailName    = $rows[0]['lastName'].' '.$rows[0]['firstName'];
        $contactDetailSociety = $rows[0]['society'];
        $contactDetailEmail   = $rows[0]['email'];  
        $contactDetailPhone   = $rows[0]['phone'];  

        //* ====================| table des factures |==================== 
        foreach($rows as $row){
            $contactDetail .=
                '<tr>
                    <td class="column1">'.$row['numbers']  .'</td>
                    <td class="column2">'.$row['dates']    .'</td>
                    <td class="column2">'.$row['society']  .'</td>
                </tr>'
            ;
        }
    }
}
//?===============================================================================================================================================================

//* ==========| Setup Variable for Society |==========
$societyDetailName = $societyDetailVAT = $societyDetailType = $societyDetailContact = $societyDetailInvoice = '';

//! ==========| Read Detail for Society |==========

if(isset($_GET['id'])){
    $societySelected = $_GET['id'];
    
    $sqlTest = "SELECT *
                FROM societies
                LEFT JOIN invoices ON societies.name = invoices.society
                LEFT JOIN contacts ON societies.name = contacts.society
                WHERE societies.id = $societySelected
            ";
    
    $results = $db->query($sqlTest);
    
    if($results->rowCount() > 0){
        $rows  = $results->fetchAll(PDO::FETCH_ASSOC);
        
        //* ====================| Infos de la société |==================== 
        $societyDetailName = $rows[0]['name'];
        $societyDetailVAT  = $rows[0]['vat'];
        $societyDetailType = $rows[0]['type'];
         
        //* ====================| table des contacts |==================== 
        foreach($rows as $row){
            $societyDetailContact .=
                '<tr>
                    <td class="column1">'.$rows[0]['lastName'].' '.$rows[0]['firstName'].'</td>
                    <td class="column2">'.$row['phone'].'</td>
                    <td class="column2">'.$row['email'].'</td>
                </tr>'
            ;
        }

        //* ====================| table des factures |==================== 
        foreach($rows as $row){
            $societyDetailInvoice .=
                '<tr>
                    <td class="column1">'.$row['numbers'].'</td>
                    <td class="column2">'.$row['dates']  .'</td>
                    <td class="column2">'.$row['society'].'</td>
                </tr>'
            ;
        }
    }
}
//?===============================================================================================================================================================

//* ==========| Setup Variable for Invoice |==========
$invoiceDetailNumber = $invoiceDetailSociety = $invoiceDetailContact = '';

//! ==========| Read Detail for Invoice |==========

if(isset($_GET['id'])){
    $invoiceSelected = $_GET['id'];
    
    $sqlTest = "SELECT *
                FROM invoices
                LEFT JOIN societies ON invoices.society = societies.name
                LEFT JOIN contacts  ON invoices.society = contacts.society
                WHERE invoices.id = $invoiceSelected
            ";
    
    $results = $db->query($sqlTest);
    
    if($results->rowCount() > 0){
        $rows  = $results->fetchAll(PDO::FETCH_ASSOC);
        
        //* ====================| Infos de la facture|==================== 
        $invoiceDetailNumber = $rows[0]['numbers'];

        //* ====================| table des sociétés |==================== 
        foreach($rows as $row){
            $invoiceDetailSociety .=
            '<tr>
            <td class="column1">'.$row['name'].'</td>
            <td class="column2">'.$row['vat'] .'</td>
            <td class="column2">'.$row['type'].'</td>
            </tr>'
            ;
        }

        //* ====================| table des contacts |==================== 
        foreach($rows as $row){
            $invoiceDetailContact .=
                '<tr>
                    <td class="column1">'.$rows[0]['lastName'].' '.$rows[0]['firstName'].'</td>
                    <td class="column2">'.$row['email'].'</td>
                    <td class="column2">'.$row['phone'].'</td>
                </tr>'
            ;
        }
    }
}
//?===============================================================================================================================================================





















?>