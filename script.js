function deleteProfile() {
    var confirmDelete = confirm("Вы уверены, что хотите удалить свой профиль?");
    if (confirmDelete) {
        // Отправить запрос на удаление профиля
        window.location.href = "delete.php";
    }
}