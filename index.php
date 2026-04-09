<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <h2>Регистрация</h2>
        <form action="action.php" method="POST">
            <label>Имя:</label>
            <input type="text" name="name" placeholder="Введите имя" required>

            <label>Почта:</label>
            <!-- type="email" как в задании -->
            <input type="email" name="email" placeholder="name@example.ru" required>

            <label>Пароль:</label>
            <input type="password" name="password" placeholder="Введите пароль" required>

            <label>Подтвердите пароль:</label>
            <input type="password" name="password_confirm" placeholder="Повторите пароль" required>

            <button type="submit">Зарегистрироваться</button>
            
            <div class="agreement">
                <input type="checkbox" id="agree" required>
                <label for="agree">Создавая учетную запись, вы соглашаетесь с нашими Условиями и конфиденциальностью</label>
            </div>
        </form>
    </div>
</body>
</html>
