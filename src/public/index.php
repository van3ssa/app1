<?php 
ini_set('display_errors',1);

define('DS', DIRECTORY_SEPARATOR);
define('ROOT_PATH', dirname(dirname(__DIR__)));
define('SRC_PATH', ROOT_PATH . DS . 'src');
// Recupère le type d'environnement d'exploitation et si on récupère rien on est en production 
define('APP_ENV', getenv('APPLICATION_ENV') ?: 'production');

require_once ROOT_PATH . DS . 'vendor' . DS . 'autoload.php';

$autoloader = Zend_Loader_Autoloader::getInstance();
$application = new Zend_Application(APP_ENV, SRC_PATH . '/application/Core/configs/application.ini');
$application->bootstrap()->run();