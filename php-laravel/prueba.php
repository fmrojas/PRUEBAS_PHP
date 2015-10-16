<?php
require_once 'vendor/autoload.php';
$email = new \SenasoftPHP\Email('fabian.rojas@juliolizarralde.com');
var_dump($email->getAddress());

?>