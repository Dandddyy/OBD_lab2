<?php

require_once '../config/connect.php';

$customer_id = $_GET['id'];
$customer = mysqli_query($connect, "SELECT * FROM `customer` WHERE `customer_id` = '$customer_id'");
$customer = mysqli_fetch_assoc($customer);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Updating Customer</title>
</head>
<style>
    body{
        background-image: url("../background47.jpg");
    }
</style>
<body>
<h3>Update Customer</h3>
<form action="../vendor/update_customer.php" method="post">
    <input type="hidden" name="customer_id" value="<?= $customer['customer_id'] ?>">
    <p>Name</p>
    <input type="text" name="name" value="<?= $customer['name'] ?>">
    <p>Phone Number</p>
    <input type="text" name="phone_number" value="<?= $customer['phone_number'] ?>">
    <p>E-Mail</p>
    <input type="text" name="e_mail" value="<?= $customer['e_mail'] ?>">
    <p>Address</p>
    <textarea name="address"><?= $customer['address'] ?></textarea><br><br>
    <button type="submit">Update</button>
</form><br><br>
<form action="../index.php">
    <button type="submit">Cancel</button>
</form>
</body>