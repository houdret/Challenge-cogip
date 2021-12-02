<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="sylvain valvassori">

    <link rel="stylesheet" href="../css/style.css">
    <?php include('read_Detail.php'); ?>

    <title>Details invoice</title>
</head>
<body>
<!--! ====================| Header |==================== -->
<!-- navigation nav -->
<?php include('navBar.php'); ?>

<!--! ====================| Content |==================== -->
<h2>Invoice: <?php echo $invoiceDetailNumber; ?></h2>

<section class="containerTables">
    <div class='tableContainer'>

        <!--* ====================| table des sociétés |==================== -->
        <h3>The society linked to the invoice</h3>
        <table class="tableSociety">
            <thead>
                <tr class="tableHead">
                    <th class="column1">Name</th>
                    <th class="column2">VAT</th>
                    <th class="column3">Type's society</th>
                </tr>
            </thead>
            <tbody>
                <?php echo $invoiceDetailSociety; ?>
            </tbody>
        </table>

        <!--* ====================| table des contacts |==================== -->
        <h3>The society linked to the Contact</h3>
        <table class="tableContact">
            <thead>
                <tr class="tableHead">
                    <th class="column1">Name</th>
                    <th class="column2">Email</th>
                    <th class="column3">Phone</th>
                </tr>
            </thead>
            <tbody>
                <?php echo $invoiceDetailContact; ?>
            </tbody>
        </table>
    </div>
</section>
</body>     
</html>