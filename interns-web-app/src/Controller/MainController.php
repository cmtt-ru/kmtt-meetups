<?php

declare(strict_types=1);

namespace App\Controller;


class MainController extends AbstractController
{
    public function mainPage(): void
    {
        $this->render('form-upload');
    }
}