<?php

require_once '../config/connect.php';

$order_id = $_GET['id'];
$order = mysqli_query($connect, "SELECT * FROM `order` WHERE `order_id` = '$order_id'");
$order = mysqli_fetch_assoc($order);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Updating Order</title>
</head>
<style>
    body{
        background-image: url("../background47.jpg");
    }
</style>
<body>
<h3>Update Order</h3>
<form action="../vendor/update_order.php" method="post">
    <input type="hidden" name="order_id" value="<?= $order['order_id'] ?>">
    <p>Customer ID</p>
    <input type="number" name="customer_id" value="<?= $order['customer_id']?>">
    <p>Product ID</p>
    <input type="number" name="product_id" value="<?= $order['product_id']?>">
    <p>Courier ID</p>
    <input type="number" name="courier_id" value="<?= $order['courier_id']?>">
    <p>Quantity</p>
    <input type="number" name="quantity" value="<?= $order['quantity']?>">
    <p>Date Get</p>
    <input type="date" name="date_get" value="<?= $order['date_get']?>">
    <p>Date Arrived</p>
    <input type="date" name="date_arrive" value="<?= $order['date_arrive']?>">
    <p>Payment Method</p>
    <input type="text" name="payment_method" value="<?= $order['payment_method']?>"><br><br>
    <button type="submit">Update</button>
</form><br><br>
<form action="../index.php">
    <button type="submit">Cancel</button>
</form>
</body>