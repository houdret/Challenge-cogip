<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="sylvain valvassori">

    <link rel="stylesheet" href="assets/css/style.css">
    <?php include('assets\php\read.php'); ?>
    
    <title>Invoices</title>
</head>
<body>
<!--! ====================| Header |==================== -->
<!-- navigation nav -->
<?php include('assets\php\navBar.php'); ?>

<h2>COGIP: Invoices directory</h2>


<!--! ====================| Section Tables |==================== -->
<section class="containerTables">
    <!--* ====================| table des factures |==================== -->
    <div class='tableContainer'>
        <table class="tableInvoices">
            <thead>
                <tr class="tableHead">
                    <th class="column1">Invoices number</th>
                    <th class="column2">Dates</th>
                    <th class="column3">Contact</th>
                    <th class="column4">Type</th>
                </tr>
            </thead>
            <tbody>
                <?php echo $invoicesDirectory; ?>
            </tbody>
        </table>
    </div>
</section>

</body>     
</html>