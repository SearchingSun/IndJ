<?php
//ошибки
ini_set('display_errors', 1);
error_reporting(E_ALL);

// подключение файлов системы
require_once __DIR__.'/../private/components/Router.php';

$router = new Router();
$router->run();
?>