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
<header>
    <nav>
        <ul>
            <li>
                <a href="index.php">Home</a>
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
                <?php echo $contactDirectory; ?>
            </tbody>
        </table>
    </div>
</section>

</body>     
</html>