<?php

require_once '../config/connect.php';

$id = $_GET['id'];

mysqli_query($connect, "DELETE FROM customer WHERE `customer`.`customer_id` = '$id'");

header("Location: /");