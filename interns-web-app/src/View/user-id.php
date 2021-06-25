<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User page</title>
</head>
<style>
    html {
        padding: 0;
        margin: 0
    }

    .header {
        height: 200px;
        border: 1px solid #000;
    }

    .container__row {
        display: flex;
    }
</style>
<body>
    Страница с идентификатором пользователя: <?=$params['id']; ?>
</body>
</html>