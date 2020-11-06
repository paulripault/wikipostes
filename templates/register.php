<!-- include le head et le header... -->
<?php include("top.php") ?>

<!-- contenu spécifique à cette page -->
<h2>Créez votre compte !</h2>

<form method="post">
    <div class="form-group">
        <label for="username">Votre pseudo</label>
        <input class="form-control" type="text" name="username" id="username">
    </div>
    <div class="form-group">
        <label for="email">Votre email</label>
        <input class="form-control" type="email" name="email" id="email">
    </div>
    <div class="form-group">
        <label for="password">Votre mot de passe</label>
        <input class="form-control" type="password" name="password" id="password">
    </div>
    <div class="form-group">
        <div><label class="form-label">Votre avatar</label></div>

        <?php
        //pour afficher les 47 avatars, on se fait pas chier à recopier 47 fois le code html... on utilise une boucle
        for ($i = 1; $i <= 30; $i++) {
        ?>

        <label>
            <input <?php if ($i == 1){echo 'checked';} ?> name="avatar" type="radio" value="<?= $i ?>">
            <img class="avatar-radio" src="img/avatars/avatar-<?= $i ?>.png">
        </label>

        <?php
        }
        ?>

    </div>

    <?php
    //affiche les éventuelles erreurs de validations
    if (!empty($errors)) {
        echo '<div class="alert alert-danger">';
        foreach ($errors as $error) {
            echo '<div>' . $error . '</div>'    ;
        }
        echo '</div>';
    }
    ?>

    <button class="btn btn-primary">Envoyer !</button>
</form>

<!-- inclue le footer et les fermetures de balises -->
<?php include("bottom.php") ?>
