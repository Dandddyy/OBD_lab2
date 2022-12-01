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
    body{
        background-image: url("../background47.jpg");
    }
</style>
<body>
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
    </form><br><br>
    <form action="customer_form.php">
        <button type="submit">Add new Customer</button>
    </form><br>
    <form action="product_form.php">
        <button type="submit">Add new Product</button>
    </form><br>
    <form action="courier_form.php">
        <button type="submit">Add new Courier</button>
    </form><br><br>
    <form action="../index.php">
        <button type="submit">Cancel</button>
    </form>
</body>