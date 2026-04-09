<?php

// 1. Ошибка открытия файла
try {
    $fp = @fopen('нет_такого.txt', 'r');
    if (!$fp) throw new Exception('Файл не найден или недоступен');
    fclose($fp);
} catch (Exception $e) {
    echo "1. {$e->getMessage()}\n";
}

// 2 
try {
    $res = 10 / 0;
} catch (Error $e) {
    $msg = date('Y-m-d H:i:s') . ' - ' . $e->getMessage() . PHP_EOL;
    file_put_contents('log.txt', $msg, FILE_APPEND);
    echo "2. Ошибка сохранена в log.txt\n";
}

// 3.
$countries = ['Spain' => 'Madrid', 'Russia' => 'Moscow'];
$key = 'Germany';
try {
    if (!isset($countries[$key])) throw new Exception("Ключ '$key' отсутствует в массиве");
    echo $countries[$key];
} catch (Exception $e) {
    echo "3. {$e->getMessage()}\n";
}

// === ЧАСТЬ 2

// 1. Timestamp
echo "1. " . strtotime('2025-03-15 10:25:00') . "\n";

// 2. Разница в секундах
echo "2. " . (time() - strtotime('1990-10-02 08:05:59')) . " сек.\n";

// 3.Текущая дата-время
echo "3. " . date('Y.m.d H:i:s') . "\n";

// 4.1 сентября текущего года
echo "4. " . date('Y.m.d', strtotime(date('Y') . '-09-01')) . "\n";

// 5.День недели (словом) 02.02.2000
$week = ['Воскресенье','Понедельник','Вторник','Среда','Четверг','Пятница','Суббота'];
echo "5. " . $week[date('w', strtotime('2000-02-02'))] . "\n";

// 6.
echo "6. Сегодня: {$week[date('w')]}\n";
echo "   12.06.2016: {$week[date('w', strtotime('2016-06-12'))]}\n";
$myBday = '2007-08-12';
echo "   День рождения: {$week[date('w', strtotime($myBday))]}\n";

// 7.Форма сравнения дат
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $d1 = strtotime($_POST['date1']);
    $d2 = strtotime($_POST['date2']);
    echo "7. Большая дата: " . date('Y-m-d', max($d1, $d2)) . "\n";
} else {
    echo "7. <form method='POST'>Дата 1: <input type='date' name='date1'> | Дата 2: <input type='date' name='date2'> <button>Сравнить</button></form><br>";
}

// 8.Преобразование формата
echo "8. " . date('d-m-Y', strtotime('2025-10-25')) . "\n";

// 9.Операции 
$base = '2000.02.03';
echo "9. +2 дня: " . date('Y.m.d', strtotime('+2 days', strtotime($base))) . "\n";
echo "   +1 мес: " . date('Y.m.d', strtotime('+1 month', strtotime($base))) . "\n";
echo "   +3 дня: " . date('Y.m.d', strtotime('+3 days', strtotime($base))) . "\n";
echo "   +1 год: " . date('Y.m.d', strtotime('+1 year', strtotime($base))) . "\n";
echo "   -3 дня: " . date('Y.m.d', strtotime('-3 days', strtotime($base))) . "\n";

// 10.Дней до Нового Года
$nextNy = strtotime(date('Y') . '-12-31 23:59:59');
echo "10. До НГ: " . ceil(($nextNy - time()) / 86400) . " дн.\n";
?>
