<?php
// Задание 3. "Изучить функцию var_dump($var)"
echo '<br>';
var_dump(2 * 2); // int(4)
echo '<br>';
var_dump(3 / 1); // int(3)
echo '<br>';
var_dump(1 / 3); // float(0.33333333333333)
echo '<br>';
var_dump('20cats' + 40); // int(60), строка '20cats' преобразовалась в число 20
echo '<br>';
var_dump(18 % 4); // int(2), деление по модулю
echo '<br>';
var_dump(10 * 2 + 5); // int(25), исходя из приоритета операций (10 * 2) + 5
echo '<br>';
var_dump(6 - 5 / 3); // float(4.3333333333333), аналогично 6 - (5/3)
echo '<br>';
var_dump('a' + 'b'); // int(0), пустая строка + пустая строка
echo '<br>';
var_dump('1a' + '  25b'); // строки преобразовались в числа 1 + 25