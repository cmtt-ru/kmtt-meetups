<?php

declare(strict_types=1);

namespace App;

use App\Controller\MainController;
use App\Controller\RandomController;
use App\Controller\UploadController;

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
            'action' => 'mainPage'
        ],
        '/uploadfile' => [
            'controller' => UploadController::class,
            'action' => 'uploadIn'
        ],
        '/random' => [
            'controller' => RandomController::class,
            'action' => 'random'
        ],
        '/randomshow' => [
            'controller' => RandomController::class,
            'action' => 'showInt'
        ]
    ];

    /**
     * Runs Application
     */
    public function run(): void
    {
        $url = $_SERVER['REQUEST_URI'] ?? '';
        $urlInfo = parse_url($url);
        $path = $urlInfo['path'];
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
