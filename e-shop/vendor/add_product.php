<?php

require_once '../config/connect.php';

$supplier_id = $_POST['supplier_id'];
$name = $_POST['name'];
$type = $_POST['type'];
$price = $_POST['price'];

mysqli_query($connect, "INSERT INTO `product` (`product_id`, `supplier_id`, `product_name`, `type`, `price`) VALUES (NULL, '$supplier_id', '$name', '$type', '$price')");

header("Location: /");