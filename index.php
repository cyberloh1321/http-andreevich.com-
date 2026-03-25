<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задачи по массивам PHP</title>
    <style>
        body { font-family: sans-serif; line-height: 1.6; }
        .task { border-bottom: 1px solid #ccc; padding: 10px 0; }
        .result { background: #f4f4f4; padding: 10px; border-radius: 5px; font-family: monospace; }
        h3 { margin-bottom: 5px; color: #333; }
    </style>
</head>
<body>

<h1>Решение задач по массивам</h1>

<?php
// 1. array_map: перевод в верхний регистр
$arr1 = ['a', 'b', 'c', 'd', 'e'];
$res1 = array_map('strtoupper', $arr1);
?>
<div class="task">
    <h3>1. array_map: ['a', 'b', 'c', 'd', 'e'] -> ['A', 'B', 'C', 'D', 'E']</h3>
    <div class="result"><?php print_r($res1); ?></div>
</div>

<?php
// 2. count: вывод последнего элемента
$arr2 = ['apple', 'banana', 'cherry'];
$lastElement = $arr2[count($arr2) - 1];
?>
<div class="task">
    <h3>2. Последний элемент через count</h3>
    <div class="result"><?php echo $lastElement; ?></div>
</div>

<?php
// 3. Проверка наличия элемента 3
$arr3 = [1, 5, 3, 9];
$hasThree = in_array(3, $arr3) ? 'Есть элемент 3' : 'Элемента 3 нет';
?>
<div class="task">
    <h3>3. Проверка наличия элемента 3</h3>
    <div class="result"><?php echo $hasThree; ?></div>
</div>

<?php
// 4. Объединение двух массивов
$arr4_1 = [1, 2, 3];
$arr4_2 = ['a', 'b', 'c'];
$res4 = array_merge($arr4_1, $arr4_2);
?>
<div class="task">
    <h3>4. Объединение массивов [1, 2, 3] и ['a', 'b', 'c']</h3>
    <div class="result"><?php print_r($res4); ?></div>
</div>

<?php
// 5. array_slice: элементы 2, 3, 4
$arr5 = [1, 2, 3, 4, 5];
$res5 = array_slice($arr5, 1, 3); // начиная с индекса 1, длина 3
?>
<div class="task">
    <h3>5. array_slice: получить [2, 3, 4]</h3>
    <div class="result"><?php print_r($res5); ?></div>
</div>

<?php
// 6. Ключи и значения
$arr6 = ['a'=>1, 'b'=>2, 'c'=>3];
$keys = array_keys($arr6);
$values = array_values($arr6);
?>
<div class="task">
    <h3>6. Ключи и значения массива</h3>
    <div class="result">
        Keys: <?php print_r($keys); ?><br>
        Values: <?php print_r($values); ?>
    </div>
</div>

<?php
// 7. array_combine: создание ассоциативного массива
$keys7 = ['a', 'b', 'c'];
$values7 = [1, 2, 3];
$res7 = array_combine($keys7, $values7);
?>
<div class="task">
    <h3>7. array_combine: ['a'=>1, 'b'=>2, 'c'=>3']</h3>
    <div class="result"><?php print_r($res7); ?></div>
</div>

<?php
// 8. Поиск позиции первого '-'
$arr8 = ['a', '-', 'b', '-', 'c', '-', 'd'];
$pos = array_search('-', $arr8);
?>
<div class="task">
    <h3>8. Позиция первого элемента '-'</h3>
    <div class="result">Индекс: <?php echo $pos; ?></div>
</div>

<?php
// 9. Сортировки
$arr9 = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
$arr9_ksort = $arr9; ksort($arr9_ksort); // по ключам
$arr9_asort = $arr9; asort($arr9_asort); // по значениям
?>
<div class="task">
    <h3>9. Различные сортировки</h3>
    <div class="result">
        ksort (по ключам): <?php print_r($arr9_ksort); ?><br>
        asort (по значениям): <?php print_r($arr9_asort); ?>
    </div>
</div>

<?php
// 10. Сумма цифр строки без цикла
$str10 = '1234567890';
$sum10 = array_sum(str_split($str10));
?>
<div class="task">
    <h3>10. Сумма цифр строки '1234567890' без цикла</h3>
    <div class="result">Сумма: <?php echo $sum10; ?></div>
</div>

<?php
// 11. Заполнение массива буквами 'x'
$res11 = array_fill(0, 10, 'x');
?>
<div class="task">
    <h3>11. Массив из 10 букв 'x'</h3>
    <div class="result"><?php print_r($res11); ?></div>
</div>

<?php
// 12. Общие элементы двух массивов (задача была обрезана, логически завершено как пересечение)
$arr12_1 = [1, 2, 3, 4, 5];
$arr12_2 = [3, 4, 5, 6, 7];
$res12 = array_intersect($arr12_1, $arr12_2);
?>
<div class="task">
    <h3>12. Общие элементы массивов (array_intersect)</h3>
    <div class="result"><?php print_r($res12); ?></div>
</div>

</body>
</html>
