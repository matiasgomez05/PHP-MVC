<?php 

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) . DS);
define('URL', "http://localhost/MVC-PHP/");

require_once "Config/Autoload.php";
//require_once "Views/template.php";
$usuario = "Models\\Usuarios";
$usuario->mostrar();
exit;

Config\Autoload::run();
Config\Enrutador::run(new Config\Request());
