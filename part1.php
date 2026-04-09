<?php
echo "<h2>Часть 1: Ошибки и Исключения</h2>";

// 1. Обработчик для открытия несуществующего файла
$filename = 'non_existent_file.txt';
// Используем оператор @ чтобы подавить стандартное предупреждение PHP и обработать его сами
$handle = @fopen($filename, 'r');

if ($handle === false) {
    echo "Ошибка: Не удалось открыть файл '$filename'. Файл не существует.<br><br>";
} else {
    fclose($handle);
}

// 2. Обработчик деления на ноль (сохранение в log.txt)
try {
    $a = 10;
    $b = 0;
    $result = $a / $b;
} catch (DivisionByZeroError $e) {
    // Записываем сообщение об ошибке в файл log.txt
    file_put_contents('log.txt', "Ошибка деления на ноль: " . $e->getMessage() . PHP_EOL, FILE_APPEND);
    echo "Произошла ошибка деления на ноль. Сообщение записано в log.txt.<br><br>";
}

// 3. Обработчик для доступа к несуществующему элементу массива
$countries = ['Spain' => 'Madrid', 'Russia' => 'Moscow'];
$searchCountry = 'Germany';

try {
    // В PHP доступ к несуществующему ключу вызывает Warning, но не Exception.
    // Чтобы использовать try-catch, мы должны сами создать проверку и выбросить исключение.
    if (!array_key_exists($searchCountry, $countries)) {
        throw new Exception("Страна '$searchCountry' не найдена в массиве.");
    }
    echo $countries[$searchCountry];
} catch (Exception $e) {
    echo "Обработка исключения: " . $e->getMessage() . "<br><br>";
}
?>
