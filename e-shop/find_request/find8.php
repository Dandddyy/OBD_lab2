<?php

require_once '../config/connect.php';

$name = $_POST['name'];

$table = mysqli_query($connect, "SELECT *
FROM `customer`
WHERE (`customer`.`customer_id` IN
(SELECT X.`customer_id`
 FROM `order` X
 WHERE `customer`.`name` != '$name' AND (NOT EXISTS
    (SELECT `order`.`product_id`
     FROM `order` INNER JOIN `customer` ON `order`.`customer_id`=`customer`.`customer_id`
     WHERE  `customer`.`name` = '$name' AND `order`.`product_id` NOT IN
       (SELECT  `order`.`product_id`
        FROM `order`
        WHERE X.`customer_id` = `order`.`customer_id`
)))))

AND (`customer`.`customer_id` NOT IN
(SELECT Y.`customer_id`
 FROM `order` Y
 WHERE (EXISTS
     (SELECT  `order`.`product_id`
        FROM `order`
        WHERE Y.`customer_id` = `order`.`customer_id` AND `order`.`product_id` NOT IN
            (SELECT `order`.`product_id`
     FROM `order` INNER JOIN `customer` ON `order`.`customer_id`=`customer`.`customer_id`
     WHERE  `customer`.`name` = '$name')
))));");
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