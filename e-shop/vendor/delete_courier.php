<?php

require_once '../config/connect.php';

$id = $_GET['id'];

mysqli_query($connect, "DELETE FROM `courier` WHERE `courier`.`courier_id` = '$id'");

header("Location: /");