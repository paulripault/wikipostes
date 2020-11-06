<!-- include le head et le header... -->
<?php include("top.php") ?>

<!-- contenu spécifique à cette page -->
<h2>Connectez-vous !</h2>

<form method="post">
    <div class="form-group"> 
        <label for="username">Votre pseudo ou email</label>
        <input class="form-control" type="text" name="username" id="username">
    </div>
    
    <div class="form-group"> 
        <label for="password">Votre mot de passe</label>
        <input class="form-control" type="password" name="password" id="password">
    </div>
   
    <?php 
    if(isset($formIsValid) && $formIsValid === false){
        echo '<div class="alert alert-danger">Mauvais identifiants</div>';
    }
    ?>
    
    <button class="btn btn-primary">Gogogo !</button>
</form>

<!-- inclue le footer et les fermetures de balises -->
<?php include("bottom.php") ?>