<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="sylvain valvassori">

    <link rel="stylesheet" href="assets/css/style.css">
    <?php include('assets\php\read.php'); ?>

    <title>Societies</title>
</head>
<body>
<!--! ====================| Header |==================== -->
<!-- navigation nav -->
<?php include('assets\php\navBar.php'); ?>

<h2>COGIP: Society directory</h2>


<!--! ====================| Section Tables |==================== -->
<section class="containerTables">
    <!--* ====================| table des sociétés |==================== -->
    <div class='tableContainer'>
        <table class="tableSociety">
            <h3>Clients</h3>
            <thead>
                <tr class="tableHead">
                    <th class="column1">Name</th>
                    <th class="column2">VAT</th>
                    <th class="column3">Country</th>
                </tr>
            </thead>
            <tbody>
                <?php echo $clientDirectory; ?>
            </tbody>
        </table>
    </div>

    <div class='tableContainer'>
        <table class="tableSociety">
            <h3>Providers</h3>
            <thead>
                <tr class="tableHead">
                    <th class="column1">Name</th>
                    <th class="column2">VAT</th>
                    <th class="column3">Country</th>
                </tr>
            </thead>
            <tbody>
                <?php echo $providerDirectory; ?>
            </tbody>
        </table>
    </div>
</section>

</body>     
</html>