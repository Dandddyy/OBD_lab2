<?php

require_once '../config/connect.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Adding Customer</title>
</head>
<style>
    body{
        background-image: url("../background47.jpg");
    }
</style>
<body>
<h3>Add new Customer</h3>
<form action="../vendor/add_customer.php" method="post">
    <p>Name</p>
    <input type="text" name="name">
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