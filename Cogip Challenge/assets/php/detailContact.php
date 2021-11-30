<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="sylvain valvassori">

    <link rel="stylesheet" href="../css/style.css">
    <?php include('readDetail.php'); ?>

    <title>Details Contact</title>
</head>
<body>
<!--! ====================| Header |==================== -->
<!-- navigation nav -->
<?php include('navBar.php'); ?>

<h2>Contact : </h2>

<span></span>

<section class="containerTables">
    <!--* ====================| table des factures |==================== -->
    <!-- &ensp; ajout un espace de 2 + l'espace compris entre la balise et les caractères -->
    <!-- https://blog.hubspot.com/website/html-space -->

    <div class='tableContainer'>
        <p>Contact&ensp;:     &ensp;<span><?php echo $contactDetailName; ?></span></p>
        <p>Society&ensp; :    &ensp;<span>baaaaaaaa booo</span></p>
        <p>Email&emsp;&ensp;: &ensp;<span>baaaaaaaa booo</span></p>
        <p>Phone&ensp;&ensp;: &ensp;<span>baaaaaaaa booo</span></p>
        <h3>Contact for the invoices</h3>
        <table class="tableContact">
            <thead>
                <tr class="tableHead">
                    <th class="column1">N° Invoice</th>
                    <th class="column2">Date</th>
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