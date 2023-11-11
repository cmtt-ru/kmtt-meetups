<?php

declare(strict_types=1);

namespace App\Controller;

abstract class AbstractController
{
    /**
     * Outputs view with params
     *
     * @param string $template - View layer file
     * @param array $params - View params
     */
    protected function render(string $template, array $params = []): void
    {
        ob_start();
        include '../src/View/' . $template . '.php';
        ob_flush();
    }
}
