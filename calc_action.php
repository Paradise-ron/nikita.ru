<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $op = $_POST['op'];
    $result = 0;

    switch ($op) {
        case '+': $result = $num1 + $num2; break;
        case '-': $result = $num1 - $num2; break;
        case '*': $result = $num1 * $num2; break;
        case '/':
            if ($num2 == 0) {
                echo "Ошибка: Деление на ноль!";
                exit;
            }
            $result = $num1 / $num2;
            break;
    }
    echo "Результат: $result";
    echo "<br><a href='index.php'>Назад</a>";
}
?>
