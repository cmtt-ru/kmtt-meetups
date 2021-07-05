<?php

declare(strict_types=1);

namespace App;

use App\Controller\MainController;
use App\Controller\ShowController;
use App\Controller\UploadController;
use App\Controller\UserController;

class Application
{
    /**
     * Web Application routes
     *
     * @var array
     */
    private $routes = [
        '/' => [
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
        ],
        '/upload' => [
            'controller' => ShowController::class,
            'action' =>'uploadForm'
        ],
        '/uploadfile' => [
            'controller' => UploadController::class,
            'action' => 'uploadIn'
        ],
        '/show' => [
            'controller' => ShowController::class,
            'action' => 'showImage'
        ]

    ];

    /**
     * Runs Application
     */
    public function run(): void
    {
        $url = $_SERVER['REQUEST_URI'] ?? '';
        $url_info=parse_url($url);
        $path=$url_info['path'];
        if ( !isset($this->routes[$path]) ) {
            var_dump($path);
            echo '404 not found';
            return;
        }

        $route = $this -> routes[$path];
        $controller = $route['controller'];
        $action = $route['action'];

        (new $controller) -> $action();
    }
}
