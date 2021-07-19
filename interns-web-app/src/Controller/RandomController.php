<?php

namespace App\Controller;

class RandomController extends AbstractController
{
    /**
     * Outputs view of random page
     */
    public function random(): void
    {
        $this->render('random-page');
    }

    /**
     * Outputs [count] random ints from [min] to [max] to random page
     */
    public function showInt(): void
    {
        $this->render('random-page');
        $result = [];
        for ($i = 0; $i < $_GET["count"]; $i++) {
            $result[] = rand($_GET["min"], $_GET["max"]);
        }
        echo implode(", ", $result);
    }
}
