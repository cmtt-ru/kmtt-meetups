<?php


namespace App\Controller;

class ShowController extends AbstractController
{
    public $urlFile;
    private const FilePath = '../uploaded/';


    public function uploadForm()
    {
        return $this->render('form-upload');
    }

    public function showImage():void
    {

        if(empty($_GET)) {
            echo "введите название изображения";
        }

        if ( array_key_exists('image',$_GET )) {
            $this->urlFile=self::FilePath.$_GET['image'].'.png';
            header("Content-Type: image/png");
            readfile($this->urlFile);
        }
    }
}
