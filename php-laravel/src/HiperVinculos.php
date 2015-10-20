<?php 
	namespace senasoftPHP;

	class HiperVinculos{
		private $hiperVinculos;

		public function __construct(array $hiperVinculos=[]){
			$this->hiperVinculos=$hiperVinculos;
		}
		public function getHiperVinculos(){
			return $this->hiperVinculos;
		}
	}

 ?>