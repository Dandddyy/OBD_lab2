<?php

require_once '../config/connect.php';

$name = $_POST['name'];
$phone_number = $_POST['phone_number'];
$e_mail = $_POST['e_mail'];

mysqli_query($connect, "INSERT INTO `courier` (`courier_id`, `name`, `phone_number`, `e_mail`) VALUES (NULL, '$name', '$phone_number', '$e_mail')");

header("Location: /");