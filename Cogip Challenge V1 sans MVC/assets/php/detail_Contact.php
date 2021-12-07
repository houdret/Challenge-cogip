<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="sylvain valvassori">

    <link rel="stylesheet" href="../css/style.css">
    <?php include('read_Detail.php'); ?>

    <title>Details Contact</title>
</head>
<body>
<!--! ====================| Header |==================== -->
<!-- navigation nav -->
<?php include('navBar.php'); ?>

<!--! ====================| Content |==================== -->
<h2>Contact : <?php echo $contactDetailName;    ?></h2>

<section class="containerTables">
    
    <!-- &ensp; ajout un espace de 2 + l'espace compris entre la balise et les caractères -->
    <!-- https://blog.hubspot.com/website/html-space -->

    <div class='tableContainer'>
    
        <!--* ====================| Infos du contact |====================  -->
        <p>Contact&ensp;:     &ensp;<span><?php echo $contactDetailName;    ?></span></p>
        <p>Society&ensp; :    &ensp;<span><?php echo $contactDetailSociety; ?></span></p>
        <p>Email&emsp;&ensp;: &ensp;<span><?php echo $contactDetailEmail;   ?></span></p>
        <p>Phone&ensp;&ensp;: &ensp;<span><?php echo $contactDetailPhone;   ?></span></p>
        
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
                <?php echo $contactDetail; ?>
            </tbody>
        </table>
    </div>
</section>
</body>     
</html>