<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Création d'un blog">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Blog</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <img src="![](img/logo.png)" alt="logo">
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="index.php?p=home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="invoices.php">Invoices</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="companies.php">Companies</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="contacts.php">Contacts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="admin.php">Admin</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container">
    <div class="starter-template" style="padding-top: 100px;">
        <?= $content; ?>
    </div>
</div>
</body>
</html>
