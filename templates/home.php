<!-- include le head et le header... -->
<?php include("top.php") ?>

<!-- contenu spécifique à cette page -->
<h2>Bievenue sur Wikipost</h2>
<p>Retrouvez le meilleurs de l'actualité</p>

<section class="d-flex flex-wrap justify-content-between">
<?php foreach($posts as $post){ ?>
    <article class="card mb-4" style="width: 18rem;">
    <?php //si j'ai une image... ?>
    <?php if(!empty($post['picture'])){ ?>
        <img class="card-img-top" src="img/uploads/<?= $post['picture'] ?>" alt="Card image cap">
    <?php } ?>
        <div class="card-body">
            <h5 class="card-title"><?= $post['title']; ?></h5>
            <p class="card-text"><?= mb_substr($post['content'], 0, 150); ?>[...]</p>
            <a href="index.php?page=detail&id=<?= $post['id'] ?>" class="btn btn-primary">Lire l'article</a>
        </div>
    </article>
<?php } ?>
</section>

<!-- inclue le footer et les fermetures de balises -->
<?php include("bottom.php") ?>
