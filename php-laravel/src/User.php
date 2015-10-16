<?php
namespace SenasoftPHP;
class User{
	protected $email;
	protected $password;
	protected $firstName;
	protected $lastName;

public function __construct($email, $password){
	$this->email = $email;
	$this->password = password_hash($password, PASSWORD_DEFAULT);
}
public function setName($firstName, $lastName){
	$this->firstName = $firstName;
	$this->lastName = $lastName;
}
public function getFirstName(){
	return $this->firstName;
}
}
?>