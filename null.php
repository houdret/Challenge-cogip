


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


if(isset($_GET['id'])){
                    $contactID = $_GET['id'];

                    var_dump($contactID);
                }



if(!isset($_GET['contactID']) OR !is_numeric($_GET['contactID'])){

} else {
    extract($_GET);
    $contactID = strip_tags($contactID);
}


if(!isset($url[1])) $contactID = $url[1];