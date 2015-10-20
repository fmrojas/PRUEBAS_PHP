<?php 
namespace senasoftPHP;

class Menu{
	private $numOptions;
	public function __construct($numOptions){
		$this->numOptions=$numOptions;

	}

	public function getNumOptions(){
		return $this->numOptions;
	}
}

 ?>