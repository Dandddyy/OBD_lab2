<?php

require_once '../config/connect.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Adding Product</title>
</head>
<style>
    body{
        background-image: url("../background47.jpg");
    }
</style>
<body>
<h3>Add new Product</h3>
<form action="../vendor/add_product.php" method="post">
    <p>Supplier ID</p>
    <input type="number" name="supplier_id">
    <p>Name</p>
    <input type="text" name="name">
    <p>Type</p>
    <input type="text" name="type">
    <p>Price</p>
    <input type="number" name="price"><br><br>
    <button type="submit">Add</button>
</form><br><br>
<form action="supplier_form.php">
    <button type="submit">Add new Supplier</button>
</form><br><br>
<form action="../index.php">
    <button type="submit">Cancel</button>
</form>
</body>