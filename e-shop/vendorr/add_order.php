<?php

require_once '../config/connect.php';

$customer_id = $_POST['customer_id'];
$product_id = $_POST['product_id'];
$courier_id = $_POST['courier_id'];
$quantity = $_POST['quantity'];
$date_get = $_POST['date_get'];
$date_arrive = $_POST['date_arrive'];
$payment_method = $_POST['payment_method'];

mysqli_query($connect, "INSERT INTO `order` (`order_id`, `customer_id`, `product_id`, `courier_id`, `quantity`, `date_get`, `date_arrive`, `payment_method`) VALUES (NULL, '$customer_id', '$product_id', '$courier_id', '$quantity', '$date_get', '$date_arrive', '$payment_method')");

header("Location: /");