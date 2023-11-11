<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Генератор</title>
</head>
<body>
<form action="/randomshow">
<p>Задайте диапазон от 1 до 1000</p>
<p>Введите нижнюю границу:
    <input type="number" max="1000" min="1" value="1" name="min" style="width:70px"></p>
<p>Введите верхнюю границу:
    <input type="number" max="1000" min="1" value="1" name="max" style="width:70px"></p>
    <p>Введите количество:
        <input type="number" max="1000" min="1" value="1" name="count" style="width:70px"></p>
    <button type="submit">Сгенерировать</button>
</form>
<form action="/">
    <button>На главную страницу</button>
</form>
</body>
</html>
