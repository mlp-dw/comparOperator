<?php
include "../config/autoload.php";
$data = array(
    'location' => $_POST["location"],
    'price' => $_POST["price"],
    'tour_operator_id' => $_POST["tour_operator_id"]
);
$where = new Destination($data);
$manager = new Manager;

$manager->createDestination($where);
