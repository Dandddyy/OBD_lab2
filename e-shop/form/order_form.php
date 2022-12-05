<?php

require_once '../config/connect.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Adding Order</title>
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
    <h3>Add new Order</h3>
    <form action="../vendor/add_order.php" method="post">
        <p>Customer ID</p>
        <input type="number" name="customer_id">
        <p>Product ID</p>
        <input type="number" name="product_id">
        <p>Courier ID</p>
        <input type="number" name="courier_id">
        <p>Quantity</p>
        <input type="number" name="quantity">
        <p>Date Get</p>
        <input type="date" name="date_get">
        <p>Date Arrived</p>
        <input type="date" name="date_arrive">
        <p>Payment Method</p>
        <input type="text" name="payment_method"><br><br>
        <button type="submit">Add</button>
    </form>
    <br><br>
    <form action="customer_form.php">
        <button type="submit">Add new Customer</button>
    </form>
    <br>
    <form action="product_form.php">
        <button type="submit">Add new Product</button>
    </form>
    <br>
    <form action="courier_form.php">
        <button type="submit">Add new Courier</button>
    </form>
    <br><br>
    <form action="../index.php" style="text-align: center; padding-bottom: 30px; padding-left: 0px">
        <button type="submit">Cancel</button>
    </form>
</div>
</body>