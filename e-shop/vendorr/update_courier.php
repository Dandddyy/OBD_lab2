<?php

require_once '../config/connect.php';

$courier_id = $_POST['courier_id'];
$name = $_POST['name'];
$phone_number = $_POST['phone_number'];
$e_mail = $_POST['e_mail'];

mysqli_query($connect, "UPDATE `courier` SET `name` = '$name', `phone_number` = '$phone_number', `e_mail` = '$e_mail' WHERE `courier`.`courier_id` = '$courier_id'");

header("Location: /");