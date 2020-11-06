<!-- include le head et le header... -->
<?php include("top.php") ?>

<h2><?= $post['title'] ?></h2>

<div>
    <?php //si j'ai une image... ?>
    <?php if(!empty($post['picture'])){ ?>
        <img class="mw-50 float-right ml-3 mb-3" src="img/uploads/<?= $post['picture'] ?>" alt="<?= $post['title'] ?>">
    <?php } ?>

    <?= $post['content'] ?>
</div>
<div><img class="avatar" src="img/avatars/avatar-<?= $post['avatar'] ?>.png"> <?= $post['username']; ?></div>

<!-- inclue le footer et les fermetures de balises -->
<?php include("bottom.php") ?>
