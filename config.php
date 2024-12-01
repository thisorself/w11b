<?php
// Налаштування БД
$database_host = 'MySQL-8.2';
$database_username = 'root';
$database_password = '';
$database_name = 'realtor_catalog';

// Відкриваємо нове з'єднання з MySQL сервером
$mysqli = new mysqli($database_host, $database_username, $database_password, $database_name);

// Виводимо помилку з'єднання
if ($mysqli->connect_error) {
    die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}
?>