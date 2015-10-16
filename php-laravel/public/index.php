<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PRUEBAS CON CLASES</title>
	<link rel="stylesheet" href="estilos.css"/>

</head>
<body>
	<header>
		<nav class="MainMenu">
			<?php
			//CODIGO PARA APLICAR LA CLASE MENU
			use SenasoftPHP\other_class\Menu; //para la clase Menú
			require_once 'vendor/autoload.php';
			$menu = new Menu();
			$menu->loadData("http://www.google.com", "Google");
			$menu->loadData("http://facebook.com", "Facebook");
			$menu->loadData("http://www.senasofiaplus.edu.co", "SenaSofia");
			$menu->loadData("http://www.sena.edu.co", "Sena");
			?>
			<ul class="MainMenu-list">
			<?php
			$menu->showMenu();
			?>
			</ul>
		</nav>
	</header>
	
	<?php
		use SenasoftPHP\other_class\Empleado;//para la clase empleado
		/*use Illuminate\Http\Request;
		use SenasoftPHP\Http\controllers\HomeControllers;*/
		require_once 'vendor/autoload.php';
		/*$require = Request::capture();
		$controller = new HomeControllers();
		$controller->index($require);*/
		
		//CÓDIGO PARA APLICAR LA CLASE EMPLEADO
		$Empleado = new Empleado("Fabián Rojas", 2000);
		$Empleado->checkSalary();
		echo '<br>';
		$Empleado1 = new Empleado("Natalia Saldarriaga", 4000);
		$Empleado1->checkSalary();
	?>
</body>
</html>