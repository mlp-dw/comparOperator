<?php
include "./config/autoload.php";
$data = array(
    'name' => $_POST["name"],
    'link' => $_POST["link"],
    'is_premium' => $_POST["is_premium"]
);

$manager = new Manager;
$manager->createTourOperator($data);

