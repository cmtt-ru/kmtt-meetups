<?php

declare(strict_types=1);

namespace App\Controller;

abstract class AbstractController
{
    protected function render(string $template, array $params)
    {
        ob_start();

        include '../src/View/' . $template. '.php';

        ob_flush();
    }
}