<?php

namespace App;

use App\Controller\MainController;
use App\Controller\UserController;

class Application
{
    private $routes = [
        '' => [
            'controller' => MainController::class,
            'action' => 'index'
        ],
        '/user/name' => [
            'controller' => UserController::class,
            'action' => 'getName'
        ],
        '/user/id' => [
            'controller' => UserController::class,
            'action' => 'getId'
        ]
    ];

    public function run()
    {
        $path = $_SERVER['PATH_INFO'] ?? '';

        if (!isset($this->routes[$path])) {
            echo '404 not found';
            return;
        }

        $route = $this->routes[$path];
        $controller = $route['controller'];
        $action = $route['action'];

        (new $controller)->$action();
    }
}