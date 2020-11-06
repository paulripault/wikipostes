<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- on charge d'abord bootstrap, puis notre css à nous -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/app.css">

    <title>Wikipost</title>
</head>

<body>
    <div class="container">
        <header class="d-flex align-items-baseline mb-3 justify-content-between">
            <div class="d-flex  align-items-baseline">
                <h1 class="mr-3"><a href="index.php">Wikipost</a></h1>
                <nav class="nav">
                    <a href="index.php" class="nav-link">Accueil</a>
                    <a href="index.php?page=cgu" class="nav-link">CGU</a>
                    <a href="index.php?page=creation-article" class="nav-link">Créer un article</a>
                </nav>
            </div>

            <nav class="d-flex align-items-baseline">
                <?php
                //si l'utilisateur n'est pas connecté... 
                if (empty($_SESSION['user'])) {
                ?>
                    <a href="index.php?page=inscription" class="nav-link">Inscription</a>
                    <a href="index.php?page=connexion" class="nav-link">Connexion</a>
                <?php
                } else {
                    //sinon, s'il est connecté
                ?>
                    <a href="index.php?page=deconnexion" class="nav-link">Déconnexion</a>
                    <div><?= $_SESSION['user']['username'] ?></div>
                <?php } ?>
            </nav>
        </header>
        <main>