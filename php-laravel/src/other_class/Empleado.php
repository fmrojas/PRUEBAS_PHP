<?php
namespace SenasoftPHP\other_class;
class Empleado{
	private $name;
	private $salary;

	public function __construct($name, $salary)
	{
		$this->name = $name;
		$this->salary = $salary;
	}

	public function checkSalary()
	{
		if ($this->salary > 3000){
			echo ("EL EMPLEADO " . $this->name . " DEBE PAGAR IMPUESTO");
		}
		else{
			echo ("EL EMPLEADO " . $this->name . " NO DEBE PAGAR IMPUESTO");
		}
	}
}