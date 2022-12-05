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
    </form>
    <br><br>
    <form action="../index.php" style="text-align: center; padding-bottom: 30px; padding-left: 0px">
        <button type="submit">Cancel</button>
    </form>
</div>
</body>