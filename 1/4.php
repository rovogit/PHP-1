<?php
// Задание 4. "Что является значением выражения присваивания"
echo($a = 2); // переменной "$a" будет присвоено значение "2"
echo '<br>';
$x = ($y = 12) - 8; // переменной "$y" будет присвоено значение "12", пер. $x, после выполнения
// вычитания, значение "4"; 4 = 12 - 8
echo $x;
// результатом выполнения оператора присваивания является само присвоенное значение