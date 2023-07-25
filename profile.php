<!DOCTYPE html>
<html>
<head>
    <title>Профиль</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Профиль пользователя</h2>
        <form id="profileForm" action="update.php" method="POST">
            <label for="fullname">ФИО:</label>
            <input type="text" name="fullname" id="fullname" value="<?php echo $user['fullname']; ?>" required>

            <label for="age">Возраст:</label>
            <input type="number" name="age" id="age" value="<?php echo $user['age']; ?>" required>

            <label for="phone">Телефон:</label>
            <input type="text" name="phone" id="phone" value="<?php echo $user['phone']; ?>" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="<?php echo $user['email']; ?>" required>

            <label for="city">Город проживания:</label>
            <input type="text" name="city" id="city" value="<?php echo $user['city']; ?>" required>

            <label for="zipcode">Домашний индекс:</label>
            <input type="text" name="zipcode" id="zipcode" value="<?php echo $user['zipcode']; ?>" required>

            <input type="submit" value="Сохранить">
            <input type="button" value="Удалить профиль" onclick="deleteProfile()">
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>