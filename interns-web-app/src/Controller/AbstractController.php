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
    protected function render(string $template, array $params=[])
    {
        include '../src/View/' . $template. '.php';
    }
}
