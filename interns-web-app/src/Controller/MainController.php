<?php

namespace App\Controller;

use App\Model\User;

/**
 * Class MainController
 *
 * @package App\Controller
 */
class MainController extends AbstractController
{
    /**
     * Returns main page message
     */
    public function index(): void
    {
        $this->render('main-page');
    }
}