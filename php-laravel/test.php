<?php
	require_once 'vendor/autoload.php';
/*
	$test=new \senasoftPHP\User('hola@gmail.com','asdf');
	$test->setName('Jhon Jairo','Bravo Castro');
	echo $test->getFirstName()." ".$test->getLastName()."\n";
	*/
	//echo "Hola Laravel <br> Como vamos php!!\n";

	// $autor=new \senasoftPHP\Author('hola@gmail.com','asdf');
	// $autor->setName('Camilo','Betancourt');

	// echo $autor->getFirstName()."\n";

	// echo $autor->getLastName()."\n";
	// var_dump($autor);

	// $post=new \senasoftPHP\Post($autor,'Mi primer post','Hola, este es mi primer comentario');
	//  echo $post->getAutor()."\n";
	// echo $post->getPost()."\n";

	// $mail=new \senasoftPHP\Email('bravo2008misena.edu.co');

	// echo $mail->getAddress()."\n";

	

	// $cabecera=new \senasoftPHP\Empleado('Bienvenidos',300);
	$cabecera=new \senasoftPHP\CabeceraPagina('Bienvenidos',300);
	echo $cabecera->getTitulo();
 ?>
