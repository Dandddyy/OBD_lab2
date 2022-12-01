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
    body{
        background-image: url("../background47.jpg");
    }
</style>
<body>
<h3>Add new Supplier</h3>
<form action="../vendor/add_supplier.php" method="post">
    <p>Company</p>
    <input type="text" name="company">
    <p>Phone Number</p>
    <input type="text" name="phone_number">
    <p>E-Mail</p>
    <input type="text" name="e_mail">
    <p>Address</p>
    <textarea name="address"></textarea><br><br>
    <button type="submit">Add</button>
</form><br><br>
<form action="../index.php">
    <button type="submit">Cancel</button>
</form>
</body>