<?php

$connect = mysqli_connect("localhost", "root", "", "eshop");

if(!$connect){
    die('Error connect to database!');
}