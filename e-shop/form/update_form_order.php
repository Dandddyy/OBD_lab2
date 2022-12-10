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
    body {
        background-image: url("../background.jpg");
        color: #ffffff;
    }

    button {
        background-color: #303030;
        color: white;
        padding 15px 32px;
        text-align: center;
        display: inline-block;
        font-size: 16px;
        border-radius: 7px;
        border: 1px solid #606060;
    }

    input, textarea {
        background-color: #303030;
        color: white;
        padding 15px 32px;
        display: inline-block;
        font-size: 16px;
        border-radius: 7px;
        border: 1px solid #606060;
    }

    form {
        padding-left: 20px;
    }

    h3 {
        text-align: center;
    }

</style>
<body>
<div class="block1"
     style="width: 20%; background-color: #101010; position: absolute; top: 20px; left: 40%; border-radius: 30px; box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);">
    <h3>Update Order</h3>
    <form action="../vendorr/update_order.php" method="post">
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
    </form>
    <br><br>
    <form action="../index.php" style="text-align: center; padding-bottom: 30px; padding-left: 0px">
        <button type="submit">Cancel</button>
    </form>
</div>
</body>