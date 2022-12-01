<?php

require_once '../config/connect.php';

$product_id = $_GET['id'];
$product = mysqli_query($connect, "SELECT * FROM `product` WHERE `product_id` = '$product_id'");
$product = mysqli_fetch_assoc($product);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Updating Product</title>
</head>
<style>
    body{
        background-image: url("../background47.jpg");
    }
</style>
<body>
<h3>Update Product</h3>
<form action="../vendor/update_product.php" method="post">
    <input type="hidden" name="product_id" value="<?= $product['product_id'] ?>">
    <p>Supplier ID</p>
    <input type="number" name="supplier_id" value="<?= $product['supplier_id'] ?>">
    <p>Name</p>
    <input type="text" name="product_name" value="<?= $product['product_name'] ?>">
    <p>Type</p>
    <input type="text" name="type" value="<?= $product['type'] ?>">
    <p>Price</p>
    <input type="number" name="price" value="<?= $product['price'] ?>"><br><br>
    <button type="submit">Update</button>
</form><br><br>
<form action="../index.php">
    <button type="submit">Cancel</button>
</form>
</body>