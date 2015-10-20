<?php
namespace senasoftPHP;
//PROTECTED ->nueva forma de visibilidad de objetos
class User{

protected $firstName;
protected $lastName;	
protected $email;
protected $password;

	public function __construct($email, $password){
		$this->email=$email;
		$this->password=password_hash($password,PASSWORD_DEFAULT);
	}

	public function setName($firstName,$lastName){
		$this->firstName=$firstName;
		$this->lastName=$lastName;
	}

	public function getFirstName(){
		return $this->firstName;
	}

	// public function getLastName(){
	// 	return $this->lastName;
	// }

}

?>