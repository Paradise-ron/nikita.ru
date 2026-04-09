<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $password_confirm = $_POST['password_confirm'] ?? '';

    // Проверка: переданы ли поля
    if (empty($email) || empty($password)) {
        echo "<h3>Ошибка: Поля Email и Пароль обязательны!</h3>";
        echo "<a href='index.php'>Вернуться</a>";
        exit;
    }

    // Простая проверка совпадения паролей
    if ($password !== $password_confirm) {
        echo "<h3>Ошибка: Пароли не совпадают!</h3>";
        echo "<a href='index.php'>Вернуться</a>";
        exit;
    }

    echo "<h3>Успешная регистрация!</h3>";
    echo "Email: " . htmlspecialchars($email);
} else {
    echo "Доступ запрещен";
}
?>
