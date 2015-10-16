<?php
namespace SenasoftPHP\other_class;
class Menu{
	private $enlaces = array();
	private $titulos = array();

	public function loadData($enlace, $titulo)
	{
		$this->enlaces[] = $enlace;
		$this->titulos[] = $titulo;
	}

	public function showMenu()
	{
		
		for($f=0; $f<count($this->enlaces); $f++){
			
			echo '<li class="MainMenu-item"><a href="'.$this->enlaces[$f].'">'.$this->titulos[$f].'</a></li>';
		}
	}
}