<?php

require_once '../config/connect.php';

$id = $_GET['id'];

mysqli_query($connect, "DELETE FROM `order` WHERE `order`.`order_id` = '$id'");

header("Location: /");