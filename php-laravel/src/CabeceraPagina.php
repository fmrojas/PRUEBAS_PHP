<?php 
namespace senasoftPHP;
class CabeceraPagina{
	private $titulo;
	private $align;
	private $color;
	private $backgroundColor;

	public function __construct($titulo,$align,$color,$backgroundColor){
		$this->titulo=$titulo;
		$this->align=$align;
		$this->color=$color;
		$this->backgroundColor=$backgroundColor;

	}

	public function getTitulo(){
		return $this->titulo;
	}
	public function getAlign(){
		return $this->align;
	}
	public function getColor(){
		return $this->color;
	}
	public function getBackgroundColor(){
		return $this->backgroundColor;
	}
}


 ?>