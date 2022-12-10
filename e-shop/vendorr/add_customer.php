<?php

require_once '../config/connect.php';

$name = $_POST['name'];
$phone_number = $_POST['phone_number'];
$e_mail = $_POST['e_mail'];
$address = $_POST['address'];

mysqli_query($connect, "INSERT INTO `customer` (`customer_id`, `name`, `phone_number`, `e_mail`, `address`) VALUES (NULL, '$name', '$phone_number', '$e_mail', '$address')");

header("Location: /");