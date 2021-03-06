<?php
error_reporting(E_ALL ^ E_WARNING);
$bdd = new PDO('mysql:host=localhost;dbname=cogip', 'root', '');

$resultat = $bdd->query("SELECT * FROM society");

?>
<h1>Create a new contact</h1>
<div>
    <form action="new_contact.php" method="post" class=" was-validated row g-1 ">
        <div>
            <label for="lastName" class="form-label">Name</label><br>
            <input type="text" name="lastName" class="form-control is-valid" value="" required>
        </div>
        <div>
            <label for="firstName" class="form-label">First name</label><br>
            <input type="text" name="firstName" class="form-control is-valid" value="" required>
        </div>
        <div>
            <label for="phone" class="form-label">Phone</label><br>
            <input type="tel" name="phone" class="form-control is-valid" value="" required>
        </div>
        <div>
            <label for="email" class="form-label">Email</label><br>
            <input type="email" name="email" class="form-control is-valid" value="" required>
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
        echo '<div class="alert alert-success" role="alert">le nom est consid??r??e comme valide.</div>';
    }
    if (false === filter_var($firstName, FILTER_SANITIZE_STRING)) {
        $errors['firstName'] = '<div class="alert alert-danger" role="alert">le pr??nom est invalide.</div>';
    } else {
        echo '<div class="alert alert-success" role="alert">la pr??nom  est bien nettoy?? et est consid??r??e comme valide.</div>';
    }
    if (false === filter_var($phone, FILTER_SANITIZE_NUMBER_INT)) {
        $errors['phone'] = '<div class="alert alert-danger" role="alert">le num??ro de t??l  est invalide.</div>';
    } else {
        echo '<div class="alert alert-success" role="alert">le num??ro de t??l est bien nettoy?? et est consid??r??e comme valide.</div>';
    }
    if (false === filter_var($email, FILTER_SANITIZE_EMAIL)) {
        $errors['email'] = '<div class="alert alert-danger" role="alert">email  est invalide.</div>';
    } else {
        echo '<div class="alert alert-success" role="alert">email est bien nettoy?? et est consid??r??e comme valide.</div>';
    }
    if (false === filter_var($society, FILTER_SANITIZE_STRING)) {
        $errors['society'] = '<div class="alert alert-danger" role="alert">la society est invalide.</div>';
    } else {
        echo '<div class="alert alert-success" role="alert">la society est consid??r??e comme valide.</div>';
    }
    $data = [
        'lastName' => $_POST['lastName'],
        'firstName' => $_POST['firstName'],
        'phone' => ($_POST['phone']),
        'email' => $_POST['email'],
        'society' => ($_POST['society']),
    ];


    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=cogip', 'root', '');

        $insertion =
            'INSERT INTO contacts (lastName, firstName, phone, email, society ) VALUES (:lastName,:firstName,:phone,:email,:society)';

        $bdd->prepare($insertion)->execute($data);

        if ($bdd == true) {
            echo '<div class="alert alert-success" role="alert">les donn??es ont bien ??t?? enregistr??es! </div>';
        }
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}
?>