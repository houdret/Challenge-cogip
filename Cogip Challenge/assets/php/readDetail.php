<?php 
//* ==========| Connect DB |==========
include('connect_db.php');



//! ==========| Requete SQL for Contacts |==========

    // $sql = "SELECT * FROM contacts, invoices WHERE id = '$contactSelected' ";
    // $req = $db->query($sql);

    // //* ==========| Recup les Datas |==========
    // $resul = $req -> fetchALL();

    // //* ==========| Stock Datas Into a variable |==========
    // // stock  les datas dans une variable que l'on affiche dans l'HTML



    // $contact['lastName'].' '.$contact['firstName']

    // $contactDirectory = '';
    // foreach($result as $detail ){
    //     $contactDirectory .= 
    //         '<tr>
    //             <td class="column2">'.$detail['numbers']  .'</td>
    //             <td class="column3">'.$detail['dates']  .'</td>
    //         </tr>'
    //     ;   
    // }
//?=================================================


// $contactSelected = 1;

if(isset($_GET['id'])){
    $contactSelected = $_GET['id'];
    
    $sqlTest = "SELECT *
                FROM contacts
                LEFT JOIN invoices ON contacts.society = invoices.society
                WHERE contacts.id = $contactSelected
            ";
    
    $results = $db->query($sqlTest);
    
    
    if($results->rowCount() > 0){
        
        $rowsA = $results->fetch();
        $rows  = $results->fetchAll();
    
        
        
        
        
        $contactDetailName = '';
        $contactDetailName .= $rowsA['lastName'].' '.$rowsA['firstName'];
        
        $contactDetail = '';
        foreach($rows as $row){
            $contactDetail .=
                '<tr>
                    <td class="column1">'.$row['numbers']  .'</td>
                    <td class="column2">'.$row['dates']    .'</td>
                </tr>'
            ;
        }
    }
}






?>