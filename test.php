<?php 
//modèle de données avec un vulgaire tableau
//pas fiable ! 
$article1 = [
    "id" => 2,
    "title" => "blabla",
    "author_id" => 5,
];

//inclue la définition de notre classe
include("Post.php");

//crée un objet, issue de cette class !
//crée une instance de notre class Post
$post1 = new Post();

//pour accéder à une propriété de notre instance
//on utilise la tite flèche -> 
//on hydrate l'instance ! 
//$post1->id = 33;
$post1->title = "Titre de mon article";
$post1->author_id = 666;
$post1->content = "bla bla bla pouf pif";
$post1->created_date = date("Y-m-d");
$post1->picture = "test.jpg";

var_dump($post1);

//pour lire les propriétés...
echo '<h1>' . $post1->title . '</h1>';

//pour modifier une propriété 
$post1->author_id = 999;

//on peut créer plein d'instances à partir d'une même classe
$post2 = new Post();
$post3 = new Post();

//appelle la fonction qui est présente sur chaque instance de la classe
$post3->title = "post 3 titrrrrrre";
$post3->show();

$post1->show();

$post1->setId(123);
echo '<br>';
echo $post1->getId();

$post1->setId("abc");