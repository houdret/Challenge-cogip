<h1>Create a new invoice</h1>
<div>
    <form action="new_invoice.php" method="post" class=" was-validated row g-1 ">
        <div>
            <label for="" class="form-label">Invoice number</label><br>
            <input type="number" name="lastName" class="form-control is-valid" value="" required>
        </div>
        <div>
            <label for="" class="form-label">Invoice date</label><br>
            <input type="date" name="firstName" class="form-control is-valid" value="" required>
        </div>
        <div>
            <label for="society" class="form-label">Company</label><br>
            <select name="society" class="form-select">
                <option value="Très facile">Très facile</option>
                <option value="Facile">Facile</option>
                <option value="Moyen">Moyen</option>
                <option value="Difficile">Difficile</option>
                <option value="Très difficile">Très difficile</option>
            </select>
        </div>
        <div>
            <label for="contacts" class="form-label">Company</label><br>
            <select name="contact" class="form-select">
                <option value="Très facile">Très facile</option>
                <option value="Facile">Facile</option>
                <option value="Moyen">Moyen</option>
                <option value="Difficile">Difficile</option>
                <option value="Très difficile">Très difficile</option>
            </select>
        </div>
        <button type="submit" name="button" class="btn btn-primary mb-3">Envoyer</button>
    </form>
</div>
<?php
error_reporting(E_ALL ^ E_WARNING);
if (isset($_POST['button'])) {
    $errors = array();
    $lastName = filter_var($_POST['lastName'], FILTER_SANITIZE_STRING);
    $firstName  = filter_var($_POST['firstName'], FILTER_SANITIZE_STRING);
    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
    $email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
    $society = filter_var($_POST['society'], FILTER_SANITIZE_STRING);

    if (false === filter_var($lastName, FILTER_SANITIZE_STRING)) {
        $errors['lastName'] = '<div class="alert alert-danger" role="alert">le nom est invalide.</div>';
    } else {
        echo '<div class="alert alert-success" role="alert">le nom est considérée comme valide.</div>';
    }
    if (false === filter_var($firstName, FILTER_SANITIZE_STRING)) {
        $errors['firstName'] = '<div class="alert alert-danger" role="alert">le prénom est invalide.</div>';
    } else {
        echo '<div class="alert alert-success" role="alert">la prénom  est bien nettoyé et est considérée comme valide.</div>';
    }
    if (false === filter_var($phone, FILTER_SANITIZE_NUMBER_INT)) {
        $errors['phone'] = '<div class="alert alert-danger" role="alert">le numéro de tél  est invalide.</div>';
    } else {
        echo '<div class="alert alert-success" role="alert">le numéro de tél est bien nettoyé et est considérée comme valide.</div>';
    }
    if (false === filter_var($email, FILTER_SANITIZE_EMAIL)) {
        $errors['email'] = '<div class="alert alert-danger" role="alert">email  est invalide.</div>';
    } else {
        echo '<div class="alert alert-success" role="alert">email est bien nettoyé et est considérée comme valide.</div>';
    }
    if (false === filter_var($society, FILTER_SANITIZE_STRING)) {
        $errors['society'] = '<div class="alert alert-danger" role="alert">la society est invalide.</div>';
    } else {
        echo '<div class="alert alert-success" role="alert">la society est considérée comme valide.</div>';
    }
    $data = [
        'lastName' => $_POST['lastName'],
        'lastName' => $_POST['firstName'],
        'phone' => ($_POST['phone']),
        'email' => $_POST['email'],
        'society' => ($_POST['society']),
    ];


    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=cogip', 'root', '');

        $insertion =
            'INSERT INTO hiking (name, difficulty, distance, duration, height_difference ) VALUES (:name,:difficulty,:distance,:duration,:height_difference)';

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
