<?php

declare(strict_types=1);

namespace App\Controller;

class UploadController extends AbstractController
{
    public $nameImage;
    public $uploadedFiles = [];
    public $countImage;
    public $check;
    public $image;
    public $allowed = array('jpg', 'png', 'jped');
    private const FILEPATH = ROOT . '/uploaded/';

    public function fileDir(): string
    {
        $this->nameImage = md5(microtime());
        return self::FILEPATH . $this->nameImage . '.png';
    }

    private function isImage($img, $i): bool
    {
        $this->check = explode('.', $img['name'][$i]);
        $this->check = end($this->check);

        if (!in_array($this->check, $this->allowed)) {
            exit("Загружать можно только картинки");
        }

        if ($img['size'][$i] > 2097152) {
            exit ("загружать можно только картинки весом меньше 2мб");
        }

        return true;
    }

    public function uploadIn(): void
    {
        $this->uploadedFiles = [];
        $this->countImage = count($_FILES['files']['name']);
        $this->image = $_FILES['files'];
        for ($i = 0; $i < $this->countImage; $i++) {

            if (!$this->isImage($this->image, $i)) {
                continue;
            }

            move_uploaded_file($this->image['tmp_name'][$i], $this->fileDir());
            $this->uploadedFiles[] = "<img width='100px' height='100px' src='" . $this->nameImage . ".png'/><br>";
        }
        $this->render('uploadedImages', $this->uploadedFiles);
    }
}

