<?php

require_once '../config/connect.php';

$company = $_POST['company'];
$phone_number = $_POST['phone_number'];
$e_mail = $_POST['e_mail'];
$address = $_POST['address'];

mysqli_query($connect, "INSERT INTO `supplier` (`supplier_id`, `company_name`, `phone_number`, `e_mail`, `address`) VALUES (NULL, '$company', '$phone_number', '$e_mail', '$address')");

header("Location: /");