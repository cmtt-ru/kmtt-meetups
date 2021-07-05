<?php

declare(strict_types=1);

namespace App\Controller;

class ShowController extends AbstractController
{
    public $urlFile;
    private const FILEPATH = '../uploaded/';

    public function uploadForm(): void
    {
        $this->render('form-upload');
    }

    public function showImage(): void
    {

        if (empty($_GET)) {
            echo "введите название изображения";
        }

        if (array_key_exists('image', $_GET)) {
            $this->urlFile = self::FILEPATH . $_GET['image'] . '.png';
            header("Content-Type: image/png");
            readfile($this->urlFile);
        }
    }
}
