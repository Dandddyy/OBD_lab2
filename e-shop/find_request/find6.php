<?php

require_once '../config/connect.php';

$supplier_id = $_POST['supplier_id'];

$table = mysqli_query($connect, "SELECT * FROM `customer` WHERE NOT EXISTS (SELECT * FROM `order` INNER JOIN `product` ON (`order`.`product_id`=`product`.`product_id`) INNER JOIN `supplier` ON (`product`.`supplier_id`=`supplier`.`supplier_id`) WHERE `supplier`.`supplier_id`!='$supplier_id' AND `customer`.`customer_id`=`order`.`customer_id`)");
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
        <th>Name</th>
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