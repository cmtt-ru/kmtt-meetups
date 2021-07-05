<?php

declare(strict_types=1);

namespace App\Controller;

class UploadController
{
    private const filePath = ROOT.'/uploaded/';

    public function filedir():string
    {
        return self::filePath.basename(md5(microtime()).'.png');
    }
    public function uploadIn():void
    {
        if (move_uploaded_file($_FILES['userfile']['tmp_name'],$this->filedir() )) {
            header("Location:../");
        }
    }
}
