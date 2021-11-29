<?php
error_reporting(E_ALL ^ E_WARNING);
$bdd = new PDO('mysql:host=localhost;dbname=cogip', 'root', '');

$resultat = $bdd->query("SELECT * FROM society");

?>
<h1>Create a new invoice</h1>
<div>
    <form action="new_invoice.php" method="post" class=" was-validated row g-1 ">
        <div>
            <label for="numbers" class="form-label">Invoice number</label><br>
            <input type="text" name="numbers" class="form-control is-valid" value="" required>
        </div>
        <div>
            <label for="dates" class="form-label">Invoice date</label><br>
            <input type="date" name="dates" class="form-control is-valid" value="" required>
        </div>
        <div>
            <label for="society" class="form-label">Company</label><br>
            <select name="society" class="form-select">
                <?php while ($donnees = $resultat->fetch())
                {
                    echo '<option value="'.$donnees['name'].'">'.$donnees['name'].'</option>';
                } ?>
            </select>
        </div>
        <div>
            <label for="type" class="form-label">Company</label><br>
            <select name="type" class="form-select">
                <option value="Fournisseur">Fournisseur</option>
                <option value="Client">Client</option>
            </select>
        </div>
        <button type="submit" name="button" class="btn btn-primary mb-3">Envoyer</button>
    </form>
</div>
<?php
error_reporting(E_ALL ^ E_WARNING);
if (isset($_POST['button'])) {
    $errors = array();
    $numbers = filter_var($_POST['numbers'], FILTER_SANITIZE_STRING);
    $dates  = $_POST['dates'];
    $society = filter_var($_POST['society'], FILTER_SANITIZE_STRING);
    $type = filter_var($_POST['type'], FILTER_SANITIZE_STRING);

    if (false === filter_var($numbers, FILTER_SANITIZE_STRING)) {
        $errors['numbers'] = '<div class="alert alert-danger" role="alert">le nombre est invalide.</div>';
    } else {
        echo '<div class="alert alert-success" role="alert">le nombre est considérée comme valide.</div>';
    }
    if (false === filter_var($society, FILTER_SANITIZE_STRING)) {
        $errors['society'] = '<div class="alert alert-danger" role="alert">la société  est invalide.</div>';
    } else {
        echo '<div class="alert alert-success" role="alert">la société est bien nettoyé et est considérée comme valide.</div>';
    }
    if (false === filter_var($type, FILTER_SANITIZE_STRING)) {
        $errors['type'] = '<div class="alert alert-danger" role="alert">le type est invalide.</div>';
    } else {
        echo '<div class="alert alert-success" role="alert">le type est considérée comme valide.</div>';
    }
    $data = [
        'numbers' => $_POST['numbers'],
        'dates' => $_POST['dates'],
        'society' => ($_POST['society']),
        'type' => $_POST['type'],

    ];


    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=cogip', 'root', '');

        $insertion =
            'INSERT INTO invoice (numbers, dates, society, type) VALUES (:numbers,:dates,:society,:type)';

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
