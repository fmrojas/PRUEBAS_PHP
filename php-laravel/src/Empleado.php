<?php 
	namespace senasoftPHP;
	class Empleado{
		private $nombre;
		private $sueldo;
		private $message;

		public function __construct($nombre,$sueldo){
			$this->nombre=$nombre;
			$this->sueldo=$sueldo;
		}

		public function getMensaje(){
			if($this->sueldo >= 3000){
				$this->message ="Paga impuesto";
			}else{
				$this->message ="No paga impuestos";
			}

			return $this->message;
		}
		public function getNombre(){
			return $this->nombre;
		}
		public function getSueldo(){
			return $this->sueldo;
		}
	}

 ?>