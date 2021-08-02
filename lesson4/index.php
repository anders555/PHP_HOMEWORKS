<!-- 1.  Сделайте функцию, которая принимает параметром число от 1 до 7, а возвращает день недели на русском языке. -->
<?php
function days($a){
    $day = [
     '1' => 'понедельник',
     '2' => 'вторник',
     '3' => 'среда',
     '4' => 'четверг',
     '5' => 'пятница',
     '6' => 'суббота',
     '7' => 'воскресенье'];
     if $day[$a] <= 7 {echo $day[$a];}
     else {
         echo 'Ошибка, введите число от 1 до 7';}
}
echo days(2);

// 2. Создайте функцию, которая обрезает строку до нужного размера.  Необходимо учесть, что слово в конце строки не должно быть обрезано.
$a = "i like beer";
$length = 6;
function cutStr($str, $length) {
    if (strlen($str) <= $length)
    return $str;
    
    $tmp = substr($str, 0, $length);
    return substr($temp, 0, strrpos($temp, ' '));
}
echo cutStr($a);

// 3.  Написать функцию, которая будет менять порядок слов в строке на обратный.
function mb_strrev($string)
{
    $strrev = "";
    for($i = strlen($string); $i >= 0; $i--) {
        $strrev = substr($string, $i, 1);
    }
    return $strrev;
}
echo strrev('hello world111');

// // 4. Написать функцию, которая вычисляет среднее арифметическое элементов массива, переданного ей в качестве аргумента. 
// Не использовать array_sum и т.д. Простым перебором через цикл
$arr = [2,4,6,7,8,9];
function average($arr){
    $sum = 0;
    for ($i=0, $i<count($arr); $i++){
        $sum+=$arr[$i];
    }
    return $sum/count($arr);
}
echo average($arr);

// 5.  Написать функцию, которая генерирует массив случайных значений. Количество элементов массива передается в качестве аргумента.
function random($num){
    $arr = [];
    for ($i=0, $i<$num; $i++) {
        $arr[$i]=rand(0, $num);
    }
    print_r ($arr);
}
echo random(20);
