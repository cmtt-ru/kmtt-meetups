<?php


namespace App\Controller;


class UploadController
{
    public $file;
    public $file_tmp;
    public $input_file;
    private const file_path = '../uploaded/';
    public $url_file;
    public function showupload()
    {
        ob_start();

        include '../src/View/form-upload.php';

        ob_flush();
    }
    public function filedir()
    {
        return self::file_path.basename(md5(microtime()).'.png');
    }
    public function uploadin()
    {
        $this->file=$_FILES;
        $this->file_tmp=$this->file['userfile']['tmp_name'];
        if (move_uploaded_file($this->file_tmp,$this->filedir() ))
            header("Location:../");
    }
    public function show()
    {
        if(!(isset($_GET)))
        {
            echo "введите название изображения";
        }
        $this->input_file=$_GET;
        if (array_key_exists('image',$this->input_file))
        {
            $this->url_file=self::file_path.$this->input_file['image'];
            var_dump($this->url_file);
            echo "<img src='".$this->url_file.".png'/>";
//            var_dump(scandir('../'));

        }

    }
}