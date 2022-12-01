<?php

require_once '../config/connect.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Adding Courier</title>
</head>
<style>
    body{
        background-image: url("../background47.jpg");
    }
</style>
<body>
<h3>Add new Courier</h3>
<form action="../vendor/add_courier.php" method="post">
    <p>Name</p>
    <input type="text" name="name">
    <p>Phone Number</p>
    <input type="text" name="phone_number">
    <p>E-Mail</p>
    <input type="text" name="e_mail"><br><br>
    <button type="submit">Add</button>
</form><br><br>
<form action="../index.php">
    <button type="submit">Cancel</button>
</form>
</body>
