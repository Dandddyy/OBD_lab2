<?php

require_once '../config/connect.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Adding Supplier</title>
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
    <h3>Add new Supplier</h3>
    <form action="../vendorr/add_supplier.php" method="post">
        <p>Company</p>
        <input type="text" name="company">
        <p>Phone Number</p>
        <input type="text" name="phone_number">
        <p>E-Mail</p>
        <input type="text" name="e_mail">
        <p>Address</p>
        <textarea name="address"></textarea><br><br>
        <button type="submit">Add</button>
    </form>
    <br><br>
    <form action="../index.php" style="text-align: center; padding-bottom: 30px; padding-left: 0px">
        <button type="submit">Cancel</button>
    </form>
</div>
</body>