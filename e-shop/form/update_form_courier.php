<?php

require_once '../config/connect.php';

$courier_id = $_GET['id'];
$courier = mysqli_query($connect, "SELECT * FROM `courier` WHERE `courier_id` = '$courier_id'");
$courier = mysqli_fetch_assoc($courier);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Updating Courier</title>
</head>
<style>
    body{
        background-image: url("../background47.jpg");
    }
</style>
<body>
<h3>Update Courier</h3>
<form action="../vendor/update_courier.php" method="post">
    <input type="hidden" name="courier_id" value="<?= $courier['courier_id'] ?>">
    <p>Name</p>
    <input type="text" name="name" value="<?= $courier['name'] ?>">
    <p>Phone Number</p>
    <input type="text" name="phone_number" value="<?= $courier['phone_number'] ?>">
    <p>E-Mail</p>
    <input type="text" name="e_mail" value="<?= $courier['e_mail'] ?>"><br><br>
    <button type="submit">Update</button>
</form>
<br><br>
<form action="../index.php">
    <button type="submit">Cancel</button>
</form>
</body>