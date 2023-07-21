<?php

$firstName = $_POST['first_name'];
$lastName = $_POST['last_name'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$data = $firstName . "\t" . $lastName . "\t" . $phone . "\t" . $email . "\n";

$filePath = fopen('data.txt', 'a+') or die("не удалось создать файл");

fwrite($filePath, $data);
fclose($filePath);

echo $data;
?>
