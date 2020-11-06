<?php

class User
{
	//1. sélectionner le premier private
	//2. ctrl+d plusieurs fois... 
	//3. ctrl-maj-flèche droite pour sélectionner la variable
	private $id;
	private $username;
	private $email;
	private $password;
	private $avatar;
	private $dateCreated;


	public function getId()
	{
		return $this->id;
	}
	public function getUsername()
	{
		return $this->username;
	}
	public function setUsername($username)
	{
		$this->username = $username;
		return $this;
	}
	public function getEmail()
	{
		return $this->email;
	}
	public function setEmail($email)
	{
		$this->email = $email;
		return $this;
	}
	public function getPassword()
	{
		return $this->password;
	}
	public function setPassword($password)
	{
		$this->password = $password;
		return $this;
	}
	public function getAvatar()
	{
		return $this->avatar;
	}
	public function setAvatar($avatar)
	{
		$this->avatar = $avatar;
		return $this;
	}
	public function getDateCreated()
	{
		return $this->dateCreated;
	}
	public function setDateCreated($dateCreated)
	{
		$this->dateCreated = $dateCreated;
		return $this;
	}
}
