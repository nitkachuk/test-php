<?php
// Обработка удаления профиля из базы данных

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

// Удаление профиля из базы данных
$sql = "DELETE FROM users WHERE id='$user_id'";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Ошибка удаления профиля: " . $conn->error;
}

$conn->close();
?>