<?php

namespace application\core;

use application\core\View;
#Подключил
class Router {

    protected $routes = [];
    protected $params = [];
    
    public function __construct() {
        $arr = require 'application/config/routes.php';
        foreach ($arr as $key =>$item) {
            $this->add($key, $item);
        }
    }
    #


    public function add($route, $params) {
        $route = '#^'.$route.'$#';
        $this->routes[$route] = $params;

    }
    #добавить маршрут принимает 2 значения обрабатывает их

    public function match() {
        $url = trim($_SERVER['REQUEST_URI'],'/');
        #Ищем url Обризаем /
        foreach ($this->routes as $route => $params) {
            if (preg_match($route, $url,$matches)){
                $this->params = $params;
                return true;
            }
        }
        return false;

    }
    #проверить маршрут

    public function run(){
           if ($this->match()) {
               #если нашло маршрут то фарматируем строку до нужного значения
               $path = 'application\controllers\\'.ucfirst($this->params['controller']).'Controller';
               if (class_exists($path)) {
                   $action = $this->params['action'].'Action';
                   if (method_exists($path, $action)) {
                       $controller = new $path($this->params);
                       $controller->$action();
                       #Проверка на ошибки
                   } else {
                      View::errorCode(404);
                   }
               } else {
                   View::errorCode(404);
               }
           }else {
               View::errorCode(404);
           }
        }
    #запуск маршрут
    }
