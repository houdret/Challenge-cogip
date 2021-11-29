<h1>Create a new company</h1>
<div>
    <form action="new_company.php" method="post" class=" was-validated row g-1 ">
        <div>
            <label for="name" class="form-label">Company name</label><br>
            <input type="text" name="name" class="form-control is-valid" value="" required>
        </div>
        <div>
            <label for="vat" class="form-label">TVA number</label><br>
            <input type="text" name="vat" class="form-control is-valid" value="" required>
        </div>
        <div>
            <label for="country" class="form-label">Country</label><br>
            <input type="text" name="country" class="form-control is-valid" value="" required>
        </div>
        <div>
            <label for="type" class="form-label">Company type</label><br>
            <select name="type" class="form-select">
                <option value="clients">Clients</option>
                <option value="provider">Provider</option>
            </select>
        </div>
        <div>
            <label for="phone" class="form-label">Phone</label><br>
            <input type="tel" name="phone" class="form-control is-valid" value="" required>
        </div>
        <button type="submit" name="button" class="btn btn-primary mb-3">Envoyer</button>
    </form>
</div>
<?php
error_reporting(E_ALL ^ E_WARNING);
if (isset($_POST['button'])) {
    $errors = array();
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $vat  = filter_var($_POST['vat'], FILTER_SANITIZE_STRING);
    $country = filter_var($_POST['country'], FILTER_SANITIZE_STRING);
    $type = filter_var($_POST['type'], FILTER_SANITIZE_STRING);
    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
    if (false === filter_var($name, FILTER_SANITIZE_STRING)) {
        $errors['name'] = '<div class="alert alert-danger" role="alert">le nom est invalide.</div>';
    } else {
        echo '<div class="alert alert-success" role="alert">le nom est considérée comme valide.</div>';
    }
    if (false === filter_var($vat, FILTER_SANITIZE_STRING)) {
        $errors['vat'] = '<div class="alert alert-danger" role="alert">le numéro de tva est invalide.</div>';
    } else {
        echo '<div class="alert alert-success" role="alert">le numéro de tva  est bien nettoyé et est considérée comme valide.</div>';
    }
    if (false === filter_var($country, FILTER_SANITIZE_STRING)) {
        $errors['country'] = '<div class="alert alert-danger" role="alert">le pays est invalide.</div>';
    } else {
        echo '<div class="alert alert-success" role="alert">le pays est considérée comme valide.</div>';
    }
    if (false === filter_var($type, FILTER_SANITIZE_STRING)) {
        $errors['type'] = '<div class="alert alert-danger" role="alert">le type est invalide.</div>';
    } else {
        echo '<div class="alert alert-success" role="alert">le type est considérée comme valide.</div>';
    }
    if (false === filter_var($phone, FILTER_SANITIZE_NUMBER_INT)) {
        $errors['phone'] = '<div class="alert alert-danger" role="alert">le numéro de tél  est invalide.</div>';
    } else {
        echo '<div class="alert alert-success" role="alert">le numéro de tél est bien nettoyé et est considérée comme valide.</div>';
    }
    $data = [
        'name' => $_POST['name'],
        'vat' => $_POST['vat'],
        'country' => ($_POST['country']),
        'type' => $_POST['type'],
        'phone' => $_POST['phone']
    ];


    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=cogip', 'root', '');

        $insertion =
            'INSERT INTO society (name, vat, country, type, phone ) VALUES (:name,:vat,:country,:type,:phone)';

        $bdd->prepare($insertion)->execute($data);

        if ($bdd == true) {
            echo '<div class="alert alert-success" role="alert">les données ont bien été enregistrées! </div>';
        }
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}
?>
