<?php

class Post
{
	//propriétés ou attributs
	//public et private sont des visibilités
	//public : accessible et modifiable de partout
	//private : impossible de modifier ou de lire depuis l'extérieur de la class
	private $id;
	public $title;
	public $content;
	public $picture;
	public $author_id;
	public $created_date;

	//cette méthode publique permet de liiiiiire la valeur
	//de l'id depuis l'extérieur de la classe
	//ces fonctions quir retournent les valeurs s'appelent des
	//getter
	//en français : accesseur :(
	public function getId()
	{
		return $this->id;
	}

	//cette fonction permet de donner une valeur à l'id ! 
	//ces fonctions qui permettent de modifier les valeurs s'appelent des setter
	//en français : mutateur :(
	public function setId($newId)
	{
		//on profite du setter pour valider les données, 
		//s'assurer que tout soit toujours cohérent
		if (!is_numeric($newId)) {
			die("hey dude tu fais quoi. Un nombre en id stp.");
		}

		$this->id = $newId;
	}

	//fonction qui affiche l'article en HTML
	//les fonctions définies dans les classes s'appelle des
	//méthodes
	public function show()
	{
		//accède au titre de l'instance dans laquelle on se trouve
		//$this fait toujours référence à l'instance actuelle de la classe
		echo '<h2>' . $this->title . '</h2>';
	}
}
