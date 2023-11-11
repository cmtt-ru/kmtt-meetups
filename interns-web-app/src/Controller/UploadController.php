<?php

declare(strict_types=1);

namespace App\Controller;

class UploadController extends AbstractController
{
    public $nameImage;
    public $allowed = array('jpg', 'png', 'jpeg');
    private const FILEPATH = ROOT . '/uploaded/';

    public function fileDir(): string
    {
        $this->nameImage = md5(microtime());
        return self::FILEPATH . $this->nameImage . '.png';
    }

    private function validate(array $img,$i)
    {
        $extension = explode('.', $img['name'][$i]);
        $extension = end($extension);

        if ($img['size'][$i] > 2097152) {
            throw new \Exception('файл не может весить больше 2мб');
        }

        if (!in_array($extension, $this->allowed)) {
            throw new \Exception('загружать можно только изображения');
        }

    }

    public function uploadIn(): void
    {
        $files = $_FILES['files'];
        $countFiles = count($files['name']);
        for ($i = 0; $i < $countFiles; $i++) {

            try {
                $this->validate($files,$i);
            }catch (\Exception $e){
                echo "ошибка: ", $e->getMessage(),"\n";
            }

            move_uploaded_file($files['tmp_name'][$i], $this->fileDir());
            $uploadedFiles[] = "<img width='100px' height='100px' src='" . $this->nameImage . ".png'/><br>";
        }
        $this->render('uploadedImages', $uploadedFiles);
    }
}

