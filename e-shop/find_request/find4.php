<?php

require_once '../config/connect.php';

$price = $_POST['price'];

$table = mysqli_query($connect, "SELECT * FROM `supplier` INNER JOIN `product` ON (`supplier`.`supplier_id`=`product`.`supplier_id`) WHERE `product`.`price`>'$price'");
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
        <th>Company</th>
        <th>Phone Number</th>
        <th>E-Mail</th>
        <th>Address</th>
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