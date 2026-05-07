<?php

// 1) Абстрактный класс Figure с требуемыми свойствами
abstract class Figure {
    protected $area;
    protected $color;
    protected $sidesCount;

    // 2) Абстрактный метод infoAbout()
    abstract public function infoAbout(): string;
}

// 4) Интерфейс с методом getArea()
interface AreaInterface {
    public function getArea(): float;
}

// 3, 4, 7, 8) Класс Rectangle
class Rectangle extends Figure implements AreaInterface {
    private $a;
    private $b;
    const SIDES_COUNT = 4; // 7) Количество сторон

    public function __construct($a, $b, $color = 'blue') {
        $this->a = $a;
        $this->b = $b;
        $this->color = $color;
        $this->sidesCount = self::SIDES_COUNT;
    }

    // 9) Подсчет площади
    public function getArea(): float {
        $this->area = $this->a * $this->b;
        return $this->area;
    }

    // 10) Информация о фигуре
    public function infoAbout(): string {
        return "Это класс прямоугольника. У него " . self::SIDES_COUNT . " стороны.";
    }
}

// 3, 5, 7, 8) Класс Square
class Square extends Figure implements AreaInterface {
    private $a;
    const SIDES_COUNT = 4;

    public function __construct($a, $color = 'red') {
        $this->a = $a;
        $this->color = $color;
        $this->sidesCount = self::SIDES_COUNT;
    }

    public function getArea(): float {
        $this->area = $this->a * $this->a;
        return $this->area;
    }

    public function infoAbout(): string {
        return "Это класс квадрата. У него 4 стороны.";
    }
}

// 3, 6, 7, 8) Класс Triangle
class Triangle extends Figure implements AreaInterface {
    private $a;
    private $b;
    private $c;
    const SIDES_COUNT = 3;

    public function __construct($a, $b, $c, $color = 'green') {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        $this->color = $color;
        $this->sidesCount = self::SIDES_COUNT;
    }

    public function getArea(): float {
        $p = ($this->a + $this->b + $this->c) / 2; // Полупериметр
        $this->area = sqrt($p * ($p - $this->a) * ($p - $this->b) * ($p - $this->c)); // Формула Герона
        return $this->area;
    }

    public function infoAbout(): string {
        return "Это класс треугольника. У него 3 стороны.";
    }
}

// 11) Создаем по 2 объекта для каждого класса
$rect1 = new Rectangle(5, 10);
$rect2 = new Rectangle(3, 7);

$sq1 = new Square(4);
$sq2 = new Square(6);

$tri1 = new Triangle(3, 4, 5);
$tri2 = new Triangle(5, 5, 5);

// 12) Вызываем методы и выводим результаты
$figures = [$rect1, $rect2, $sq1, $sq2, $tri1, $tri2];

foreach ($figures as $fig) {
    echo $fig->infoAbout() . "\n";
    echo "Площадь: " . $fig->getArea() . "\n\n";
}
?>