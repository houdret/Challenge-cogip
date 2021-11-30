<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="sylvain valvassori">

    <link rel="stylesheet" href="./assets/css/style.css">
    <?php include('assets\php\read.php'); ?>

    <title>Contacts</title>
</head>
<body>
<!--! ====================| Header |==================== -->
<!-- navigation nav -->
<?php include('assets\php\navBar.php'); ?>

<h2>Contact: <?php echo $nom_conact_selectioner; ?></h2>

<span></span>

<section class="containerTables">
    <p>Contact : <span><?php echo $nom_conact_selectioner;     ?></span></p>
    <p>Society : <span><?php echo $society_conact_selectioner; ?></span></p>
    <p>Email   : <span><?php echo $email_conact_selectioner;   ?></span></p>
    <p>Phone   : <span><?php echo $phone_conact_selectioner;   ?></span></p>
    <!--* ====================| table des factures |==================== -->
    <div class='tableContainer'>
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