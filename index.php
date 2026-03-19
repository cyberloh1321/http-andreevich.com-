<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Задания</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
            color: #333;
        }
        h1 {
            text-align: center;
            color: #2c3e50;
            border-bottom: 3px solid #3498db;
            padding-bottom: 10px;
        }
        .task {
            background: white;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            border-left: 5px solid #3498db;
        }
        .task h2 {
            margin-top: 0;
            color: #2980b9;
            font-size: 1.2em;
        }
        .result {
            background-color: #ecf0f1;
            padding: 10px 15px;
            border-radius: 4px;
            margin-top: 10px;
            font-family: 'Courier New', monospace;
            color: #2c3e50;
        }
        .label {
            font-weight: bold;
            color: #e74c3c;
        }
        .functions-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 15px;
        }
    </style>
</head>
<body>

    <h1>Выполнение PHP заданий</h1>

    <?php
    // ============================================================================
    // ЗАДАЧА 1: Сумма 40% от первого и 84% от второго
    // ============================================================================
    $num1 = 100;
    $num2 = 200;
    $result1 = ($num1 * 0.40) + ($num2 * 0.84);
    ?>
    <div class="task">
        <h2>Задание 1: Проценты от чисел</h2>
        <p>Дано два числа: <span class="label"><?= $num1 ?></span> и <span class="label"><?= $num2 ?></span></p>
        <div class="result">
            Сумма (40% от первого + 84% от второго): <strong><?= $result1 ?></strong>
        </div>
    </div>

    <?php
    // ============================================================================
    // ЗАДАЧА 2: Если > 10, то +100, иначе -30
    // ============================================================================
    $num_task2 = 15;
    $original_task2 = $num_task2;
    if ($num_task2 > 10) {
        $num_task2 += 100;
    } else {
        $num_task2 -= 30;
    }
    ?>
    <div class="task">
        <h2>Задание 2: Условное изменение числа</h2>
        <p>Дано число: <span class="label"><?= $original_task2 ?></span>. Если оно больше 10, увеличьте на 100, иначе уменьшите на 30.</p>
        <div class="result">
            Результат: <strong><?= $num_task2 ?></strong>
        </div>
    </div>

    <?php
    // ============================================================================
    // ЗАДАЧА 3: Четное / 2, Нечетное * 3
    // ============================================================================
    $num_task3 = 7;
    $original_task3 = $num_task3;
    if ($num_task3 % 2 == 0) {
        $num_task3 /= 2;
    } else {
        $num_task3 *= 3;
    }
    ?>
    <div class="task">
        <h2>Задание 3: Четность числа</h2>
        <p>Дано натуральное число: <span class="label"><?= $original_task3 ?></span>. Если четное — делим на 2, иначе — умножаем на 3.</p>
        <div class="result">
            Результат: <strong><?= $num_task3 ?></strong>
        </div>
    </div>

    <?php
    // ============================================================================
    // ЗАДАЧА 4: Четверть часа
    // ============================================================================
    $min = 45;
    if ($min >= 0 && $min <= 14) $quarter = "первую";
    elseif ($min >= 15 && $min <= 29) $quarter = "вторую";
    elseif ($min >= 30 && $min <= 44) $quarter = "третью";
    elseif ($min >= 45 && $min <= 59) $quarter = "четвертую";
    else $quarter = "некорректное значение";
    ?>
    <div class="task">
        <h2>Задание 4: Четверть часа</h2>
        <p>Минута: <span class="label"><?= $min ?></span> (от 0 до 59)</p>
        <div class="result">
            Попадает в <strong><?= $quarter ?></strong> четверть часа
        </div>
    </div>

    <?php
    // ============================================================================
    // ЗАДАЧА 5: Время года по месяцу
    // ============================================================================
    $month = 11;
    if ($month == 12 || $month == 1 || $month == 2) $season = "зима";
    elseif ($month >= 3 && $month <= 5) $season = "весна";
    elseif ($month >= 6 && $month <= 8) $season = "лето";
    elseif ($month >= 9 && $month <= 11) $season = "осень";
    else $season = "некорректный месяц";
    ?>
    <div class="task">
        <h2>Задание 5: Время года</h2>
        <p>Месяц: <span class="label"><?= $month ?></span> (от 1 до 12)</p>
        <div class="result">
            Это <strong><?= $season ?></strong>
        </div>
    </div>

    <?php
    // ============================================================================
    // ЗАДАЧА 6: Условие с $a (0 или 2 -> +7, иначе / 10)
    // ============================================================================
    $test_values = [5, 0, -3, 2];
    ?>
    <div class="task">
        <h2>Задание 6: Проверка переменной $a</h2>
        <p>Если $a равна 0 или 2, прибавляем 7, иначе делим на 10.</p>
        <div class="result">
            <?php foreach ($test_values as $a): ?>
                <?php 
                $original_a = $a;
                if ($a == 0 || $a == 2) {
                    $a += 7;
                } else {
                    $a /= 10;
                }
                ?>
                Было: <span class="label"><?= $original_a ?></span> → Стало: <strong><?= $a ?></strong><br>
            <?php endforeach; ?>
        </div>
    </div>

    <?php
    // ============================================================================
    // ЗАДАЧА 7: Перевод секунд в дни, часы, минуты, секунды
    // ============================================================================
    $total_seconds = 90065;
    $days = intdiv($total_seconds, 86400);
    $remaining = $total_seconds % 86400;
    $hours = intdiv($remaining, 3600);
    $remaining = $remaining % 3600;
    $minutes = intdiv($remaining, 60);
    $seconds = $remaining % 60;
    ?>
    <div class="task">
        <h2>Задание 7: Конвертер секунд</h2>
        <p>Введено секунд: <span class="label"><?= $total_seconds ?></span></p>
        <div class="result">
            Это: <strong><?= $days ?> дн. <?= $hours ?> ч. <?= $minutes ?> мин. <?= $seconds ?> сек.</strong>
        </div>
    </div>

    <?php
    // ============================================================================
    // ЗАДАЧА 8: Сложное условие (>=50, >10<30, иначе ошибка)
    // ============================================================================
    $num_task8 = 20;
    ?>
    <div class="task">
        <h2>Задание 8: Проверка диапазонов</h2>
        <p>Дано число: <span class="label"><?= $num_task8 ?></span></p>
        <div class="result">
            <?php
            if ($num_task8 >= 50) {
                echo "Число >= 50. Квадрат: <strong>" . ($num_task8 * $num_task8) . "</strong>";
            } elseif ($num_task8 > 10 && $num_task8 < 30) {
                echo "Число от 10 до 30. Результат: <strong>0</strong>";
            } else {
                echo "Результат: <strong style='color:red'>Ошибка</strong>";
            }
            ?>
        </div>
    </div>

    <?php
    // ============================================================================
    // ЗАДАЧИ 9-12: ФУНКЦИИ
    // ============================================================================
    
    // 9. Квадрат числа
    function getSquare($n) {
        return $n * $n;
    }

    // 10. Сумма двух чисел
    function getSum($a, $b) {
        return $a + $b;
    }

    // 11. (Первое - Второе) / Третье
    function calcComplex($a, $b, $c) {
        if ($c == 0) return "Ошибка: деление на ноль";
        return ($a - $b) / $c;
    }

    // 12. День недели по номеру
    function getDayName($num) {
        $days = [
            1 => "Понедельник", 2 => "Вторник", 3 => "Среда",
            4 => "Четверг", 5 => "Пятница", 6 => "Суббота", 7 => "Воскресенье"
        ];
        return $days[$num] ?? "Неверный номер дня";
    }
    ?>
    <div class="task">
        <h2>Задания 9-12: Функции</h2>
        <div class="functions-grid">
            <div class="result">
                <strong>9. Квадрат числа:</strong><br>
                getSquare(5) = <span class="label"><?= getSquare(5) ?></span>
            </div>
            <div class="result">
                <strong>10. Сумма чисел:</strong><br>
                getSum(10, 20) = <span class="label"><?= getSum(10, 20) ?></span>
            </div>
            <div class="result">
                <strong>11. Разность и деление:</strong><br>
                calcComplex(100, 20, 4) = <span class="label"><?= calcComplex(100, 20, 4) ?></span>
            </div>
            <div class="result">
                <strong>12. День недели:</strong><br>
                getDayName(3) = <span class="label"><?= getDayName(3) ?></span>
            </div>
        </div>
    </div>

</body>
</html>
