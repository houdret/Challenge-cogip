<?php
//* ==========| Titre de la page |==========
$this->_titlePage = 'Detail\'s contact';

//* ==========| Content |==========
$contactInvoice = '';
    foreach($contacts as $DetailContact){
        $contactInvoice .=
            '<tr>
                <td class="column1">'.$DetailContact->Numbers()    .'</td>
                <td class="column2">'.$DetailContact->dates()      .'</td>
                <td class="column3">'.$DetailContact->societyName().'</td>
            </tr>'
        ;
    }
?>
<!--! ====================| Content |==================== -->
<h2>Contact : <?= $DetailContact->lastName().' '.$DetailContact->firstName(); ?></h2>

<section class="containerTables">
    <div class='tableContainer'>
    
        <!--* ====================| Infos du contact |====================  -->
        <p>Contact&ensp;:     &ensp;<span><?= $DetailContact->lastName().' '.$DetailContact->firstName(); ?></span></p>
        <p>Society&ensp; :    &ensp;<span><?= $DetailContact->societyName(); ?></span></p>
        <p>Email&emsp;&ensp;: &ensp;<span><?= $DetailContact->email();       ?></span></p>
        <p>Phone&ensp;&ensp;: &ensp;<span><?= $DetailContact->phone();       ?></span></p>
        
        <!--* ====================| table des factures |==================== -->
        <h3>The contact's invoices</h3>
        <table class="tableInvoice">
            <thead>
                <tr class="tableHead">
                    <th class="column1">N° Invoice</th>
                    <th class="column2">Date</th>
                    <th class="column3">Society</th>
                </tr>
            </thead>
            <tbody>
                <?= $contactInvoice; ?>
            </tbody>
        </table>
    </div>
</section>