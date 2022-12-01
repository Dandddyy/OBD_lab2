<?php

require_once '../config/connect.php';

$phone_number = $_POST['phone_number'];

$table = mysqli_query($connect, "SELECT * FROM `order` INNER JOIN `customer` ON (`order`.`customer_id`=`customer`.`customer_id`) WHERE `customer`.`phone_number`='$phone_number';");
$table = mysqli_fetch_all($table);
$check = 0;

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Requests</title>
</head>
<style>
    body{
        background-image: url("../background47.jpg");
    }
    th, td {
        padding: 10px;
    }

    th {
        background: #606060;
        color: #ffffff;
    }

    td {
        background: #b5b5b5;
    }
</style>
<body>
<table>
    <tr>
        <th>ID</th>
        <th>Customer ID</th>
        <th>Product ID</th>
        <th>Courier ID</th>
        <th>Quantity</th>
        <th>Date Get</th>
        <th>Date Arrived</th>
        <th>Payment Method</th>
    </tr>
    <?php
    foreach ($table as $table){
        if($check != $table[0]){
            $check = $table[0];
            ?>
            <tr>
                <td><?= $table[0] ?></td>
                <td><?= $table[1] ?></td>
                <td><?= $table[2] ?></td>
                <td><?= $table[3] ?></td>
                <td><?= $table[4] ?></td>
                <td><?= $table[5] ?></td>
                <td><?= $table[6] ?></td>
                <td><?= $table[7] ?></td>
            </tr>
            <?php
        }
    }
    ?>
</table>
<br><br>
<form action="../index.php">
    <button type="submit">Home</button>
</form>
</body>