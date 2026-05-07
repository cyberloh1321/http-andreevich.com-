<?php

class Worker {
    public $name;
    public $salary;
    private $age; // скрытое свойство

    // Конструктор для установки свойств при создании объекта
    public function __construct($name, $age, $salary) {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    // Геттеры
    public function getName() { return $this->name; }
    public function getAge()  { return $this->age; }
    public function getSalary() { return $this->salary; }

    // Метод для суммы зарплат (в PHP статический, т.к. работает с двумя объектами)
    public static function getSalarySum(Worker $w1, Worker $w2) {
        return $w1->salary + $w2->salary;
    }

    // Приватная проверка возраста (по последнему требованию)
    private function checkAge($newAge) {
        return $newAge >= 18;
    }

    // Открытый сеттер, который использует приватную проверку
    public function setAge($newAge) {
        if ($this->checkAge($newAge)) {
            $this->age = $newAge;
            echo "✅ Возраст успешно изменен на {$this->age}\n";
        } else {
            echo "❌ Вам работать в нашей компании еще рано\n";
        }
    }
}

// === 1. Создание объектов и установка свойств ===
$worker1 = new Worker("Алексей", 25, 50000);
$worker2 = new Worker("Мария", 17, 40000);

// === 2. Вывод суммы зарплат и возрастов ===
echo "Сумма зарплат: " . ($worker1->salary + $worker2->salary) . "\n";
echo "Сумма возрастов: " . ($worker1->getAge() + $worker2->getAge()) . "\n\n";

// === 3. Вывод работы геттеров ===
echo "getName: " . $worker1->getName() . "\n";
echo "getAge: " . $worker2->getAge() . "\n";
echo "getSalary: " . $worker1->getSalary() . "\n\n";

// === 4. Вывод суммы через метод ===
echo "Сумма зарплат через метод: " . Worker::getSalarySum($worker1, $worker2) . "\n\n";

// === 5. Тест setAge и приватного checkAge ===
echo "Попытка установить 16 лет: ";
$worker2->setAge(16);

echo "Попытка установить 20 лет: ";
$worker2->setAge(20);

echo "\nИтоговый возраст Марии: " . $worker2->getAge() . "\n";
?>