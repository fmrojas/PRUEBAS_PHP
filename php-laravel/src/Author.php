<?php
namespace SenasoftPHP;

class Author extends User{

	public function getLastName(){
		return $this->lastName;
	}
	
}

?>