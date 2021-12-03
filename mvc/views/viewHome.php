<?php
//* ==========| Titre de la page |==========
$this->titlePage = 'Home';

//* ==========|  Content |==========
    $datasContacts = '';
    foreach($contacts as $contact ){
        $datasContacts .= 
            '<tr data-href="assets\php\detail_Contact.php?id='.$contact->id().'">
                <td class="column1">'.$contact->lastName().' '.$contact->firstName().'</td>
                <td class="column2">'.$contact->phone()      .'</td>
                <td class="column3">'.$contact->email()      .'</td>
                <td class="column4">'.$contact->societyName().'</td> 
            </tr>'
        ;   
    }
?>

        
<h2>COGIP: Contact directory</h2>

<!--! ====================| Section Tables |==================== -->
<section class="containerTables">
    <!--* ====================| table des factures |==================== -->
    <div class='tableContainer'>
        <table class="tableContact">
            <thead>
                <tr class="tableHead">
                    <th class="column1">Name</th>
                    <th class="column2">Phone</th>
                    <th class="column3">Email</th>
                    <th class="column3">Society</th>
                </tr>
            </thead>
            <tbody>
                <?= $datasContacts; ?>
            </tbody>
        </table>
    </div>
</section>

</body>     
</html>