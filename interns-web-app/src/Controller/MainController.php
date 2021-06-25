<?php

namespace App\Controller;

use App\Model\User;

/**
 * Class MainController
 *
 * @package App\Controller
 */
class MainController
{
    /**
     * Returns main page message
     */
    public function index(): void
    {
        echo 'This is super web-app';
    }
}