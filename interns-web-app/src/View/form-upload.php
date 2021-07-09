<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Главная Страница</title>
</head>
<style>
    .upForm {
        background: black;
        color: white;
        border-radius: 1em;
        padding: 1em;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%)
    }

    #otpravka {
        margin-top: 30px;
        display: flex;
        margin-left: 35%;
    }
</style>
<body>
<div class="upForm">
    <form method="post" action="/uploadfile" enctype="multipart/form-data" id="frmImgUpload">
        <label class="btn btn-success" for="file_id">
            <input name="files[]" id="file_id" type="file" accept="image/*" data-type='image' multiple="true"
                   style="display: none">
            Выберите одно или несколько изображений
        </label>
        <br>
        <button type="submit" id="otpravka" class="btn btn-success">Отправить</button>
</div>
</form>
</body>
</html>