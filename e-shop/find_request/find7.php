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
)))))");
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
    body {
        background-image: url("../background.jpg");
        color: #ffffff;
    }

    th, td {
        padding: 10px;
        border-radius: 2px;
    }

    th {
        background: #303030;
        color: #ffffff;
        border: 1px solid #606060;
    }

    td {
        background: #606060;
    }

    table {
        padding-top: 30px;
    }

    form {
        padding-left: 20px;
    }

    h3 {
        text-align: center;
    }

    a {
        text-shadow: 0 0 2px rgba(0, 0, 0, 0.5);
    }

    button {
        background-color: #303030;
        color: white;
        padding 15px 32px;
        text-align: center;
        display: inline-block;
        font-size: 16px;
        border-radius: 7px;
        border: 1px solid #606060;
    }

</style>
<body>
<div class="block1" align="center"
     style="width: 50%; background-color: #101010; position: absolute; top: 20px; left: 25%; border-radius: 30px; box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);">
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
    <form action="../index.php" style="text-align: center; padding-bottom: 30px; padding-left: 0px">
        <button type="submit">Home</button>
    </form>
</div>
</body>