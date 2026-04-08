<?php
file_put_contents('test.txt', 'Привет, мир!');
echo "<br>";

echo file_get_contents('test.txt') . "\n";

rename('test.txt', 'mir.txt');

mkdir('folder');

rename('mir.txt', 'folder/mir.txt');

copy('folder/mir.txt', 'world.txt');

$bytes = filesize('world.txt');
echo "<br>";

echo "Байты: $bytes\n";
echo "Мегабайты: " . round($bytes / 1048576, 6) . "\n";
echo "Гигабайты: " . round($bytes / 1073741824, 9) . "\n";

unlink('world.txt');

echo "world.txt существует: " . (file_exists('world.txt') ? 'Да' : 'Нет') . "\n";
echo "mir.txt существует: " . (file_exists('folder/mir.txt') ? 'Да' : 'Нет') . "\n";
?>
