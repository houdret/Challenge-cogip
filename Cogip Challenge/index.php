<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="sylvain valvassori">

    <link rel="stylesheet" href="./assets/css/style.css">
    <?php include('assets\php\homeDatas.php'); ?>


    <title>Cogip challenge</title>

</head>
<body>
<!--! ====================| Header |==================== -->
<!-- navigation nav -->
<header>
    <nav>
        <ul>
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="contacts.php">Contacts</a>
            </li>
            <li>
                <a href="societies.php">Societies</a>
            </li>
            <li>
                <a href="invoices.php">Invoices</a>
            </li>
        </ul>
    </nav>
</header>

<!--! ====================| Section Tables |==================== -->
<section class="tablesContainer">
    <h2>Welcome to the COGIP</h2>
    <!--* ====================| table des factures |==================== -->
    <div class='tableContainer recentInvoices'>
        <h3>Recent Invoices</h3>
        <table class="tableInvoices">
                <thead>
                    <tr class="tableHead">
                        <th class="column1">Invoice number</th>
                        <th class="column2">Dates</th>
                        <th class="column3">Contact</th>
                        <th class="column4">Type</th>
                    </tr>
                </thead>
                <tbody>
                    <?php echo $datasInvoices; ?>
                </tbody>
        </table>
    </div>

    <!--* ====================| table des contacts |==================== -->
       <div class='tableContainer recentContacts'>
            <h3>Recent Contacts</h3>
            <table class="tableContacts">
                <thead>
                    <tr class="tableHead">
                        <th class="column1">Name</th>
                        <th class="column2">Phone</th>
                        <th class="column3">Email</th>
                        <th class="column4">Society</th>
    
                    </tr>
                </thead>
                <tbody>
                    <?php echo $datasContacts; ?>
                </tbody>
            </table>
       </div>

    <!--* ====================| table des societies |==================== -->
    <div class='tableContainer recentSocieties'>
    <h3>Recent Societies</h3>
        <table class="tableSocieties">
            <thead>
                <tr class="tableHead">
                    <th class="column1">Name</th>
                    <th class="column2">VAT</th>
                    <th class="column3">Country</th>
                    <th class="column4">Type</th>
                </tr>
            </thead>
            <tbody>
                <?php echo $datasSocieties; ?>
            </tbody>
        </table>
    </div>

</section>


</body>
</html>

