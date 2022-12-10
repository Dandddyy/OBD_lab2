<?php

require_once '../config/connect.php';

$id = $_GET['id'];

mysqli_query($connect, "DELETE FROM `supplier` WHERE `supplier`.`supplier_id` = '$id'");

header("Location: /");