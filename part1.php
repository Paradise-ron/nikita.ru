<?php
echo "<h2>Часть 1: Ошибки и Исключения</h2>";

// 1. Обработчик для открытия несуществующего файла
$filename = 'non_existent_file.txt';
$handle = @fopen($filename, 'r');

if ($handle === false) {
    echo "Ошибка: Не удалось открыть файл '$filename'. Файл не существует.<br><br>";
} else {
    fclose($handle);
}

// 2. Обработчик деления на ноль
try {
    $a = 10;
    $b = 0;
    $result = $a / $b;
} catch (DivisionByZeroError $e) {
    file_put_contents('log.txt', "Ошибка: " . $e->getMessage() . PHP_EOL, FILE_APPEND);
    echo "Произошла ошибка деления на ноль. Записано в log.txt<br><br>";
}

// 3. Обработчик для массива
$countries = ['Spain' => 'Madrid', 'Russia' => 'Moscow'];
$searchCountry = 'Germany';

try {
    if (!array_key_exists($searchCountry, $countries)) {
        throw new Exception("Страна '$searchCountry' не найдена.");
    }
    echo $countries[$searchCountry];
} catch (Exception $e) {
    echo "Обработка: " . $e->getMessage() . "<br><br>";
}
?>
