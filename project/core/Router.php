<?php

namespace Core;
use App\Controllers\Index;
use App\Controllers\About;
use App\Controllers\Gallery;

final class Router
{

    private $route;

    function __construct(){
        // Получаем конфигурацию из файла.
        $this->route =$_SERVER["PATH_INFO"];
    }

    public function getURI()
    {
        if (!empty($_SERVER['PATH_INFO'])) {
            return trim($_SERVER['PATH_INFO'], '/');
        }
    }

    public function run()
    {
        $uri = $this->getURI();

        foreach ($this->route as $pattern => $routes) {
            if (preg_match("~$pattern~", $uri)) {
                $internalRoute = preg_replace("~$pattern~", $routes, $uri);
                $segments = explode('/', $internalRoute);
                $controller = ucfirst(array_shift($segments)) . 'Controller';

                $action = 'action' . ucfirst(array_shift($segments));
                $parameters = $segments;

                $controllerFile = ROOT . '../app/controllers/' . $controller . '.php';
                if (file_exists($controllerFile)) {
                    include($controllerFile);
                }
            }
        }
    }
}

//    private $href;
//    public function __construct()
//    {
//        $this->href = $_SERVER["PATH_INFO"];
//    }