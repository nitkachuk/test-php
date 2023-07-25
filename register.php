<?php
// Обработка данных регистрации и сохранение в базе данных

// Пример подключения к базе данных MySQL
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "test_task_php";

// Создание подключения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Получение данных из формы регистрации
$fullname = $_POST['fullname'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$city = $_POST['city'];
$zipcode = $_POST['zipcode'];

// Вставка данных в базу данных
$sql = "INSERT INTO users (fullname, age, phone, email, city, zipcode) VALUES ('$fullname', '$age', '$phone', '$email', '$city', '$zipcode')";

if ($conn->query($sql) === TRUE) {
    header("Location: profile.php");
} else {
    echo "Ошибка регистрации: " . $conn->error;
}

$conn->close();
?>