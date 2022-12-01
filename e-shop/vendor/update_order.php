<?php

require_once '../config/connect.php';

$order_id = $_POST['order_id'];
$customer_id = $_POST['customer_id'];
$product_id = $_POST['product_id'];
$courier_id = $_POST['courier_id'];
$quantity = $_POST['quantity'];
$date_get = $_POST['date_get'];
$date_arrive = $_POST['date_arrive'];
$payment_method = $_POST['payment_method'];

mysqli_query($connect, "UPDATE `order` SET `customer_id` = '$customer_id', `product_id` = '$product_id', `courier_id` = '$courier_id', `quantity` = '$quantity', `date_get` = '$date_get', `date_arrive` = '$date_arrive', `payment_method` = '$payment_method' WHERE `order`.`order_id` = '$order_id'");

header("Location: /");