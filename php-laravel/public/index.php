<?php 
	require_once  'vendor/autoload.php';
	
	use senasoftPHP\Empleado;
	use senasoftPHP\HiperVinculos;
	use senasoftPHP\http\Controllers\HomeControllers;
	use Illuminate\Http\Request;

	$require=  Request::capture(); //Metodo estatico
	$controllers = new HomeControllers($require);
	$controllers->index($require);
	
	
	// $empleado=new Empleado('Jhon Jairo Bravo C',3200);

	

	// echo $empleado->getImpuesto()."\n";


	//$hiperVinculos=new HiperVinculos(['inicio'=>'Inicio','contacto'=>'Contacto','login'=>'Login']);



 ?>
















