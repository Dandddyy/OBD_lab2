<?php

require_once '../config/connect.php';

$customer_id = $_POST['customer_id'];
$name = $_POST['name'];
$phone_number = $_POST['phone_number'];
$e_mail = $_POST['e_mail'];
$address = $_POST['address'];

mysqli_query($connect, "UPDATE `customer` SET `name` = '$name', `phone_number` = '$phone_number', `e_mail` = '$e_mail', `address` = '$address' WHERE `customer`.`customer_id` = '$customer_id'");

header("Location: /");