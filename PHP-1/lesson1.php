<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Урок 1: Быстрый старт: выражения и переменные, типы.</title>
    <style>
        p {
            font-size: 28px;
        }
    </style>
</head>
<body>
<div class="col-md-12 text-center">
    <h1 style="color: darkred;">Урок - 1. Быстрый старт: выражения и переменные, типы.</h1>
    <h2>
        <b>Задание 1</b> (установка сервера) <b style="color: green;">&#10004</b>
        <br>
        <br>
    </h2>
    <h2>
        <b>Задание 2</b> (добавить офф. php мануал в закладки) <b style="color: green;">&#10004</b>
        <br>
        <br>
    </h2>
    <h2>
        <b>Задание 3</b> (изучить функцию var_dump($var)) <b style="color: green;">&#10004</b>
        <br>
        <br>
    </h2>
    <p>
        var_dump(2*2); //
        <?php
        var_dump(2 * 2);
        ?>
        <br>
    </p>
    <p>
        var_dump(3/1); //
        <?php
        var_dump(3 / 1);
        ?>
        <br>
    </p>
    <p>
        var_dump(1/3); //
        <?php
        var_dump(1 / 3);
        ?>
        <br>
    </p>
    <p>
        var_dump('20cats'+40); //
        <?php
        var_dump('20cats' + 40);
        ?>
        <br>
    </p>
    <p>
        var_dump(18%4); //
        <?php
        var_dump(18 % 4);
        ?>
        <br>
    </p>
    <p style="color: steelblue;">Деление по модулю.</p>
    <h2>
        <b>Задание 4</b> (что является значением выражения присваивания) <b style="color: green;">&#10004</b>
        <br>
        <br>
    </h2>
    <p>
        echo ($a = 2); //
        <?php
        echo($a = 2);
        ?>
        <br>
    </p>
    <p>
        $x = ($y = 12) - 8; echo $x; //
        <?php
        $x = ($y = 12) - 8;
        echo $x;
        ?>
        <br>
    </p>
    <p style="color: steelblue;">Значением такого выражения, является величина, которая присваевается.</p>
    <h2>
        <b>Задание 5</b> (изучить логический тип данных (boolean) <b style="color: green;">&#10004</b>
        <br>
        <br>
    </h2>
    <p>
        1 == 1.0 =
        <?php
        var_dump(1 == 1.0);
        ?>
        <br>
    </p>
    <p style="color: steelblue;">Равно после преобразования типов</p>
    <p>
        1 === 1.0 =
        <?php
        var_dump(1 === 1.0);
        ?>
        <br>
    </p>
    <p style="color: steelblue;">Тождественно не равно или они разных типов</p>
    <p>
        '02' == 2 =
        <?php
        var_dump('02' == 2);
        ?>
        <br>
    </p>
    <p style="color: steelblue;">Равно после преобразования типов</p>
    <p>
        '02' === 2 =
        <?php
        var_dump('02' === 2);
        ?>
        <br>
    </p>
    <p style="color: steelblue;">Тождественно не равно или они разных типов</p>
    <p>
        '02' == '2' =
        <?php
        var_dump('02' == '2');
        ?>
        <br>
    </p>
    <p style="color: steelblue;">Равно после преобразования типов</p>
</div>
</body>
</html>