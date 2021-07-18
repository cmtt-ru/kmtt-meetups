<?php

declare(strict_types=1);

namespace App\Controller;


class MainController extends AbstractController
{
    /**
    * Outputs view of main page
    */
    public function mainPage(): void
    {
        $this->render('main-page');
    }
}