<?php include("top.php"); ?>

<!-- attribut enctype : essentiel pour pouvoir faire de l'upload !  -->
<form method="post" enctype="multipart/form-data">
    <h2>Créer un article !</h2>

    <?php 
        if (!empty($errors)) {
            echo '<div class="alert alert-danger"><h4>Oh shit !</h4>';
            foreach ($errors as $error) {
                echo '<div>' . $error . '</div>';
            }
            echo '</div>';
        }
    ?>

    <div class="form-group"> 
        <label for="title">Un titre bien punchy</label>
        <input class="form-control" type="text" id="title" name="title" value="<?php if(!empty($_POST['title'])){
            echo $_POST['title'];
        } ?>" placeholder="Un super titre !">
    </div>

    <div class="form-group"> 
        <label for="content">Votre article</label>
        <textarea class="form-control" type="text" placeholder="bla bla bla" id="content" name="content" rows="10"><?php if(!empty($_POST['content'])){
            echo $_POST['content'];
        } ?></textarea>
    </div>

    <div class="form-group">
        <!-- champ pour choisir le fichier image -->
        <input type="file" name="pic">
    </div>

    <div class="form-group">
        <button class="btn btn-success">Publier !</button>
    </div>
</form>

<?php include("bottom.php"); ?>