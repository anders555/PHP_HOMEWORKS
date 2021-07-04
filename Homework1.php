<?php
//Задание 1.
//1. Создать 5 переменных
//2. У каждой переменной должен быть свой тип данных
//3. Вывести эти переменные на экран (echo)

$boo = 1;
$str = 'Hello';
$flo = 1.23;
$int = 124;
$arr = [[1], 'Ivan', 3.45, 8,true];
echo $boo;
echo $str;
echo $flo;
echo $int;
echo '<pre>';
var_dump($arr);
echo '</pre>';

//Задание 2
//4. Используя var_dump() вывести на экран результат 5 математических операций
//5.  Используя var_dump() вывести на экран результат 5 операций сравнений

$a = 25;
$b = 34;
var_dump ($a+$b);
var_dump ($b-$a);
var_dump ($a*$b);
var_dump ($a/$b);
var_dump ($a%$b);

var_dump ($a == $b);
var_dump ($a === $b);
var_dump ($a > $b);
var_dump ($a != $b);
var_dump ($a<$b);
?>


