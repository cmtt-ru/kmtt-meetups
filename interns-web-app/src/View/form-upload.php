<!--<form enctype="multipart/form-data" action="/uploadfile" method="POST">-->
<!--    Отправить этот файл: <input name="userfile" type="file" />-->
<!--    <input type="submit" value="Отправить файл" />-->
<!--</form>-->


<form method="post" action="/uploadfile" enctype="multipart/form-data" id="frmImgUpload">
    <input name="files[]" type="file" accept="image/*" data-type='image' multiple="true"/>
    <input type="submit" value="Отправить файл"/>
</form>
<?php
//if (!empty($_FILES)) {
//    $total = count($_FILES['files']['name']);
////    echo $total ."\n";
//// Loop through each file
////    for ($i = 0; $i < $total - 1; $i++) {
////        //Get the temp file path
////        $tmpFilePath = $_FILES['files']['size'][$i];
////        var_dump($_FILES['files']);
////    }
////    var_dump($tmpFilePath);
//    $temp=$_FILES['files'];
//    var_dump($temp['tmp_name'][0]);
//}