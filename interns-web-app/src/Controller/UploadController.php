<?php

//declare(strict_types=1);

namespace App\Controller;

class UploadController extends AbstractController
{
    public $nameImage;
    public $uploadedFiles=[];
    public $countImage;
    public $check;
    public $image;
    public $allowed = array('jpg', 'png', 'jped');
    private const FILEPATH = ROOT . '/uploaded/';

    public function fileDir(): string
    {
        $this->nameImage=md5(microtime());
        return self::FILEPATH . $this->nameImage . '.png';
    }

    public function IsImage($img, $i): bool
    {
        $this->check = explode('.', $img['name'][$i]);
        $this->check = end($this->check);
        if (!in_array($this->check, $this->allowed)) exit("Загружать можно только картинки");
        if ($img['size'][$i] > 2097152) exit ("загружать можно только картинки весом меньше 2мб");
        return true;
    }

    public function uploadIn(): void
    {
        $this->uploadedFiles=[];
        $this->countImage = $total = count($_FILES['files']['name']);
        $this->image = $_FILES['files'];
        for ($i = 0; $i < $total; $i++) {
            if ($this->IsImage($this->image, $i)) {
                if (move_uploaded_file($this->image['tmp_name'][$i], $this->fileDir())){
                    $this->uploadedFiles[]="<a href='http://localhost:8080/show?image=".$this->nameImage."'>Картинка {$i} </a></br>";
                    continue;
                }
                exit('ошибка при загрузке файла');
            }
        }
        $this->render('uploadedImages',$this->uploadedFiles);
//        exit('ошибок нет , Все загруженно успешно');

    }
}
