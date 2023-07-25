<?php
// Обработка данных обновления профиля и сохранение в базе данных

// Пример подключения к базе данных MySQL
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

// Создание подключения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Получение данных из формы обновления профиля
$fullname = $_POST['fullname'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$city = $_POST['city'];
$zipcode = $_POST['zipcode'];

// Обновление данных в базе данных
$sql = "UPDATE users SET fullname='$fullname', age='$age', phone='$phone', email='$email', city='$city', zipcode='$zipcode' WHERE id='$user_id'";

if ($conn->query($sql) === TRUE) {
    header("Location: profile.php");
} else {
    echo "Ошибка обновления профиля: " . $conn->error;
}

$conn->close();
?>