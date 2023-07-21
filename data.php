<?php
// Получение данных из POST-запроса
$firstName = $_POST['first_name'];
$lastName = $_POST['last_name'];
$phone = $_POST['phone'];
$email = $_POST['email'];

// Составление строки данных
$data = $firstName . "\t" . $lastName . "\t" . $phone . "\t" . $email . "\n";
// Путь к файлу для записи данных
$filePath = fopen('data.txt', 'a+') or die("не удалось создать файл"); // Замените на фактический путь к вашему файлу
// Запись данных в файл
fwrite($filePath, $data);
fclose($filePath);
// Возвращение успешного ответа клиенту
echo $data;
?>
