<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Калькулятор</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        .result { margin-top: 15px; padding: 10px; border-radius: 5px; }
        .error { background-color: #ffebee; color: #c62828; }
        .success { background-color: #e8f5e9; color: #2e7d32; }
    </style>
</head>
<body>

    <h2>Простой калькулятор</h2>
    
    <form method="POST" action="">
        <input type="number" name="num1" step="any" placeholder="Первое число" required>
        <input type="number" name="num2" step="any" placeholder="Второе число" required>
        <br><br>
        <!-- Атрибут name одинаковый у всех кнопок, value разный -->
        <button type="submit" name="operation" value="add">Сложить</button>
        <button type="submit" name="operation" value="sub">Вычесть</button>
        <button type="submit" name="operation" value="mul">Умножить</button>
        <button type="submit" name="operation" value="div">Разделить</button>
    </form>

    <!-- Результат выводится после формы -->
    <?php
    $output = '';

    // Проверяем, что запрос был отправлен методом POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        // Проверяем, была ли передана выбранная операция
        if (isset($_POST['operation'])) {
            $num1 = $_POST['num1'] ?? '';
            $num2 = $_POST['num2'] ?? '';
            $op   = $_POST['operation'];

            // 1. Базовая валидация
            if ($num1 === '' || $num2 === '') {
                $output = '<div class="result error">⚠️ Пожалуйста, заполните оба поля.</div>';
            } elseif (!is_numeric($num1) || !is_numeric($num2)) {
                $output = '<div class="result error">⚠️ Разрешено вводить только числа.</div>';
            } else {
                $a = (float)$num1;
                $b = (float)$num2;
                $result = 0;

                // 2. Выполнение вычислений
                switch ($op) {
                    case 'add':
                        $result = $a + $b;
                        break;
                    case 'sub':
                        $result = $a - $b;
                        break;
                    case 'mul':
                        $result = $a * $b;
                        break;
                    case 'div':
                        // 3. Обработка крайнего случая: деление на 0
                        if ($b == 0) {
                            $output = '<div class="result error">❌ Ошибка: деление на ноль невозможно!</div>';
                            $result = null;
                        } else {
                            $result = $a / $b;
                        }
                        break;
                    default:
                        $output = '<div class="result error">⚠️ Неизвестная операция.</div>';
                        $result = null;
                }

                // Вывод результата, если ошибок не было
                if ($result !== null) {
                    // htmlspecialchars защищает от XSS при выводе
                    $safeResult = htmlspecialchars($result);
                    $output = "<div class='result success'>✅ Результат: {$safeResult}</div>";
                }
            }
        }
    }

    echo $output;
    ?>

</body>
</html>
