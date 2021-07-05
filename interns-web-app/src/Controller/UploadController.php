<?php

declare(strict_types=1);

namespace App\Controller;

class UploadController
{
    private const FILEPATH = ROOT . '/uploaded/';

    public function fileDir(): string
    {
        return self::FILEPATH . basename(md5(microtime()) . '.png');
    }

    public function uploadIn(): void
    {
        if (move_uploaded_file($_FILES['userfile']['tmp_name'], $this->fileDir())) {
            header("Location:../");
        }
    }
}
