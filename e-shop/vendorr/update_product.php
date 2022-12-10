<?php

require_once '../config/connect.php';

$product_id = $_POST['product_id'];
$supplier_id = $_POST['supplier_id'];
$product_name = $_POST['product_name'];
$type = $_POST['type'];
$price = $_POST['price'];

mysqli_query($connect, "UPDATE `product` SET `supplier_id` = '$supplier_id', `product_name` = '$product_name', `type` = '$type', `price` = '$price' WHERE `product`.`product_id` = '$product_id'");

header("Location: /");