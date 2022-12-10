<?php

require_once '../config/connect.php';

$supplier_id = $_POST['supplier_id'];
$company_name = $_POST['company_name'];
$phone_number = $_POST['phone_number'];
$e_mail = $_POST['e_mail'];
$address = $_POST['address'];

mysqli_query($connect, "UPDATE `supplier` SET `company_name` = '$company_name', `phone_number` = '$phone_number', `e_mail` = '$e_mail', `address` = '$address' WHERE `supplier`.`supplier_id` = '$supplier_id'");

header("Location: /");