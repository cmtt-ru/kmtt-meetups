<?php

namespace App;

use App\Controller\MainController;
use App\Controller\UserController;

class Application
{
    /**
     * Web Application routes
     *
     * @var array
     */
    private $routes = [
        '' => [
            'controller' => MainController::class,
            'action' => 'index'
        ],
        '/file/upload' => [
            'controller' => UserController::class,
            'action' => 'getName'
        ],
        '/file/name' => [
            'controller' => UserController::class,
            'action' => 'getId'
        ]
    ];

    /**
     * Runs Application
     */
    public function run(): void
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