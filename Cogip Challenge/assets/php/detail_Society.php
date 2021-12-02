<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="sylvain valvassori">

    <link rel="stylesheet" href="../css/style.css">
    <?php include('read_Detail.php'); ?>

    <title>Details Society</title>
</head>
<body>
<!--! ====================| Header |==================== -->
<!-- navigation nav -->
<?php include('navBar.php'); ?>

<!--! ====================| Content |==================== -->
<h2>Society : <?php echo $societyDetailName; ?></h2>

<section class="containerTables">
    
    <!-- &ensp; ajout un espace de 2 + l'espace compris entre la balise et les caractères -->
    <!-- https://blog.hubspot.com/website/html-space -->

    <div class='tableContainer'>
        
        <!--* ====================| Infos de la société |====================  -->
        <p>VAT&ensp;&ensp;: &ensp;<span><?php echo $societyDetailVAT;  ?></span></p>
        <p>Type&ensp;:      &ensp;<span><?php echo $societyDetailType; ?></span></p>

        <!--* ====================| table des contacts |==================== -->
        <h3>The contact persons</h3>
        <table class="tableContact">
            <thead>
                <tr class="tableHead">
                    <th class="column1">Name</th>
                    <th class="column2">Phone</th>
                    <th class="column3">Email</th>
                </tr>
            </thead>
            <tbody>
                <?php echo $societyDetailContact; ?>
            </tbody>
        </table>

        <!--* ====================| table des factures |==================== -->
        <h3>The society's invoices</h3>
        <table class="tableInvoice">
            <thead>
                <tr class="tableHead">
                    <th class="column1">N° Invoice</th>
                    <th class="column2">Date</th>
                    <th class="column3">Contact name</th>
                </tr>
            </thead>
            <tbody>
                <?php echo $societyDetailInvoice; ?>
            </tbody>
        </table>
    </div>
</section>
</body>     
</html>