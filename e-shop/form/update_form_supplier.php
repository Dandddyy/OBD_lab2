<?php

require_once '../config/connect.php';

$supplier_id = $_GET['id'];
$supplier = mysqli_query($connect, "SELECT * FROM `supplier` WHERE `supplier_id` = '$supplier_id'");
$supplier = mysqli_fetch_assoc($supplier);

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
<form action="../vendor/update_supplier.php" method="post">
    <input type="hidden" name="supplier_id" value="<?= $supplier['supplier_id'] ?>">
    <p>Company</p>
    <input type="text" name="company_name" value="<?= $supplier['company_name'] ?>">
    <p>Phone Number</p>
    <input type="text" name="phone_number" value="<?= $supplier['phone_number'] ?>">
    <p>E-Mail</p>
    <input type="text" name="e_mail" value="<?= $supplier['e_mail'] ?>">
    <p>Address</p>
    <textarea name="address"><?= $supplier['address'] ?></textarea><br><br>
    <button type="submit">Update</button>
</form><br><br>
<form action="../index.php">
    <button type="submit">Cancel</button>
</form>
</body>