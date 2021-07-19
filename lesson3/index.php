<!-- 1. Удалить из строки пробелы и определить, является ли она перевертышем. -->
<?php
$str = "ololo";
$new_str = strrev(str_ireplace(" ", '', $str));
if (strcasecmp($str, $new_str) == 0) {
    echo "$str равно $new_str, перевертыш";
} else {
    echo "$str не равно $new_str)";
}

// 2. Найти самое длинное слово в строке.
$str = "I’m still learning English, so please speak slowly.?";
$words  = explode(' ', $str);

$longestWordLength = 0;
$longestWord = '';

foreach ($words as $word) {
   if (strlen($word) > $longestWordLength) {
      $longestWordLength = strlen($word);
      $longestWord = $word;
   }
}

echo $longestWord;

// 3. Посчитать количество заглавных и прописных букв в строке.
$string = "I’m still learning English, sO Please speak slowly.?";
$capitalsAmount = mb_strlen( preg_replace('/[^A-ZА-ЯЁ]/u', '', $string), 'UTF-8');
$lowercaseAmount = mb_strlen( preg_replace('/[^a-zа-яё]/u', '', $string), 'UTF-8');
echo " Заглавных букв - $capitalsAmount, строчных букв - $lowercaseAmount";

// 4.Посчитать количество четных и нечетных элементов массива.
$arr = [-1, 1, 3, 4, 5, 8, 7,];
$a = 0;
$b = 0;
for ($i = 0; $i < count($arr); $i++) {
     if ($arr[$i] % 2 == 0) {
     $a++;
}
else if ($arr[$i] % 2 != 0) {
     $b++;
}
}
echo "Количество четных элементов - $a, количество нечетных элементов - $b";
  
// 5. Вывести на экран те элементы массива, которые выше среднего значения.!!!
$arr = [1, 5, 5, 7, 9,12, 14, 131,256];
$arr = array_filter($arr);
$average = array_sum($arr)/count($arr);
if ($arr[$i] > $average) {
    var_dump $arr[$i];
}
// 6.  Найти наибольший и наименьший элементы массива (не используя стандартные ф-ции min и max).
$array = [1, 5, 6 ,7 , 88, 97];
asort($array);
$highestValue       = end($array);
arsort($array);
$lowestValue       = end($array);
echo "Наибольший элемент - $highestValue,наименьший элемент - $lowestValue";

  
// 8. Преобразовать двумерный массив в одномерный.
   $array = Array(
  0 => Array(
    0 => 'name 0',
    1 => 'name 1',
    2 => 'name 2'
  ),
  1 => Array(
    0 => 100,
    1 => 200,
    2 => 300
  )
);
$newarr = array();
foreach ($array as $arrkey => $array) {
    foreach ($array as $key => $val) {
        $newarr[$key][$arrkey] = $val;
    }
}

print_r($newarr);
// 9. В двумерном массиве поменять четные и нечетные столбцы местами.
  $cars = array
  (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
  );
