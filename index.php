<?php

require 'application/lib/Dev.php';
#Подключил debug
use application\core\Router;

spl_autoload_register(function($class) {
    $path = str_replace('\\', '/', $class.'.php');
    if (file_exists($path)) {
        require $path;
    }
});

#Автозагрузка классов

session_start();
#Старт сессии

$router = new Router;
$router->run();
