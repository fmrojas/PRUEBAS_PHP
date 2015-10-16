<?php
namespace SenasoftPHP\Http\controllers;
use Illuminate\Http\Request;
use SenasoftPHP\Http\Views\View;
class HomeControllers{
	public function index(Request $request){
		$view = new View ('home', [
			'message' => 'Hello From a View!',
			'message1' =>'Esto es por Lemos!']);

		$response = $view->render();
		$response -> send();
	}
}