<!DOCTYPE html>
<html>
<head>
    <title>Регистрация</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Регистрация</h2>
        <form id="registrationForm" action="register.php" method="POST">
            <label for="fullname">ФИО:</label>
            <input type="text" name="fullname" id="fullname" required>

            <label for="age">Возраст:</label>
            <input type="number" name="age" id="age" required>

            <label for="phone">Телефон:</label>
            <input type="text" name="phone" id="phone" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>

            <label for="city">Город проживания:</label>
            <input type="text" name="city" id="city" required>

            <label for="zipcode">Домашний индекс:</label>
            <input type="text" name="zipcode" id="zipcode" required>

            <input type="submit" value="Зарегистрироваться">
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>