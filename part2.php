<?php
echo "<h2>Часть 2: Дата и Время</h2>";

// 1. Выведите 15 марта 2025 года, 10:25:00 в формате timestamp
$timestamp = strtotime('15 March 2025 10:25:00');
echo "1. Timestamp: " . $timestamp . "<br>";

// 2. Найдите разницу между 2 октября 1990 года, 08:05:59 и текущим моментом в секундах
$pastTime = strtotime('2 October 1990 08:05:59');
$now = time();
$diffSeconds = $now - $pastTime;
echo "2. Разница в секундах: " . $diffSeconds . "<br>";

// 3. Выведите текущую дату-время в формате 'Год.месяц.день Час:Минута:Секунда'
echo "3. Текущая дата: " . date('Y.m.d H:i:s') . "<br>";

// 4. Выведите 1-го сентября текущего года в формате 'Год.месяц.день'
echo "4. 1 сентября: " . date('Y.m.d', strtotime('1 September')) . "<br>";

// 5. Узнайте, какой день недели (словом) был 2 февраля 2000 года
// (l - день недели полностью, D - сокращенно)
echo "5. День недели (2.02.2000): " . date('l', strtotime('2 February 2000')) . "<br>";

// 6. Массив дней недели и вывод текущего
$week = ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'];
// date('w') возвращает 0 (воскресенье) до 6 (суббота)
$todayIndex = date('w');
echo "6. Сегодня: " . $week[$todayIndex] . "<br>";

// Узнайте какой день недели был 12.06.2016
$checkDateIndex = date('w', strtotime('12.06.2016'));
echo "   День недели 12.06.2016: " . $week[$checkDateIndex] . "<br>";

// 8. Дана дата 'Год-месяц-день', преобразовать в 'день-месяц-год'
$inputDate = '2023-12-25'; // Пример даты
$formattedDate = date('d-m-Y', strtotime($inputDate));
echo "8. Преобразование $inputDate -> $formattedDate<br>";

// 9. Работа с переменной $date
$date = '2000.02.03';
$currentDate = strtotime($date);

// Прибавить 2 дня
$currentDate = strtotime('+2 days', $currentDate);
echo "9. +2 дня: " . date('d.m.Y', $currentDate) . "<br>";

// Прибавить 1 месяц
$currentDate = strtotime('+1 month', $currentDate);
echo "   +1 месяц: " . date('d.m.Y', $currentDate) . "<br>";

// Прибавить 3 дня
$currentDate = strtotime('+3 days', $currentDate);
echo "   +3 дня: " . date('d.m.Y', $currentDate) . "<br>";

// Прибавить 1 год
$currentDate = strtotime('+1 year', $currentDate);
echo "   +1 год: " . date('d.m.Y', $currentDate) . "<br>";

// Отнять 3 дня
$currentDate = strtotime('-3 days', $currentDate);
echo "   -3 дня: " . date('d.m.Y', $currentDate) . "<br><br>";


// 10. Сколько дней осталось до Нового Года
$nextNewYear = strtotime('1 January next year');
$daysToNewYear = ceil(($nextNewYear - time()) / 86400);
echo "10. До Нового года осталось: $daysToNewYear дней<br>";

?>

<!-- 7. Форма для сравнения дат -->
<h3>Сравнение дат</h3>
<form method="POST">
    <label>Дата 1 (ГГГГ-ММ-ДД):</label>
    <input type="date" name="date1" required><br><br>
    
    <label>Дата 2 (ГГГГ-ММ-ДД):</label>
    <input type="date" name="date2" required><br><br>
    
    <button type="submit">Сравнить</button>
</form>

<?php
// Обработка формы
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $date1 = $_POST['date1'];
    $date2 = $_POST['date2'];
    
    // Преобразуем в timestamp для сравнения
    $ts1 = strtotime($date1);
    $ts2 = strtotime($date2);
    
    if ($ts1 > $ts2) {
        echo "<p>Дата 1 ($date1) больше (позже).</p>";
    } elseif ($ts2 > $ts1) {
        echo "<p>Дата 2 ($date2) больше (позже).</p>";
    } else {
        echo "<p>Даты равны.</p>";
    }
}
?>
