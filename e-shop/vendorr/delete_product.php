<?php

require_once '../config/connect.php';

$id = $_GET['id'];

mysqli_query($connect, "DELETE FROM `product` WHERE `product`.`product_id` = '$id'");

header("Location: /");