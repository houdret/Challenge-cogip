<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="sylvain valvassori">

    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="assets\js\clickRow.js"></script>
    <?php 
    include('./assets\php\read_Home_data.php'); 
    include('./assets\php\create.php');
    ?>


    <title>Cogip challenge</title>

</head>
<body>
    <!--! ====================| Header |==================== -->
    <!-- navigation nav -->
    <?php include('assets\php\navBar.php'); ?>

    <h2>Welcome to the COGIP</h2>


    <!--! ====================| Section Formulaire |==================== -->
    <section class="formContainer">
        <!--* ====================| Form des factures |==================== -->
        <form class="invoiceForm" action="index.php" method="post">
            <h3>Add a new invoice</h3>
            <input name='society'    type="text" placeholder="Company name">
            <?php echo isset($nameErrInvoice) ? $nameErrInvoice : null; ?>
            <input name='numbers' type="text" placeholder="Invoice numbers">
            <?php echo isset($numbersErr) ? $numbersErr : null; ?>
            <input name='dates'   type="date" placeholder="Date">
            <?php echo isset($datesErr) ? $datesErr : null; ?>
            <select name="type">
                <option value=""  selected>Type</option>
                <option value="client"    >Client</option>
                <option value="provider"  >Provider</option>
            </select>
            <?php echo isset($typeErrInvoice) ? $typeErrInvoice : null; ?>
            <input name='submitInvoice' type="submit" value="ADD">
        </form>
        <?php echo $successInvoiceForm; ?>
        <!--* ====================| Form des sociétés |==================== -->
        <form class="societyForm" action="index.php" method="post">
            <h3>Add a new company</h3>
            <input name='name'    type="text" placeholder="Company name">
            <?php echo isset($nameErrCompany) ? $nameErrCompany : null; ?>

            <input name='vat'     type="text" placeholder="VAT numbers">
            <?php echo isset($vatErr) ? $vatErr : null; ?>

            <input name='country' type="text" placeholder="Country">
            <?php echo isset($countryErr) ? $countryErr : null; ?>

            <select name="type">
                <option value="" selected>Type</option>
                <option value="client"    >Client</option>
                <option value="provider"  >Provider</option>
            </select>
            <?php echo isset($typeErrCompany) ? $typeErrCompany : null; ?>
            
            <input name='submitCompany'  type="submit" value="ADD">
        </form>
        <?php echo $successSocietyForm; ?>
        <!--* ====================| Form des contacts |==================== -->
        <form class="contactForm" action="index.php" method="post">
            <h3>Add a new contact</h3>
            <input name='lastName'  type="text"  placeholder="Last name">
            <?php echo isset($lastNameErr) ? $lastNameErr : null; ?>
            <input name='firstName' type="text"  placeholder="First name">
            <?php echo isset($firstNameErr) ? $firstNameErr : null; ?>
            <input name='phone'     type="text"  placeholder="Phone number">
            <?php echo isset($phoneErr) ? $phoneErr : null; ?>
            <input name='email'     type="email" placeholder="Address mail"> 
            <?php echo isset($emailErr) ? $emailErr : null; ?>
            <input name='society'   type="text" placeholder="Company name"> 
            <?php echo isset($societyErr) ? $societyErr : null; ?>
            <input name='submitContact' type="submit" value="ADD">
        </form>
        <?php echo $successContactForm; ?>
    </section>
        
    <!--! ====================| Section Tables |==================== -->
    <section class="tablesContainer">
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

        <!--* ====================| table des sociétés |==================== -->
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

