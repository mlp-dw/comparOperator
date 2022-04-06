<?php
include "../config/autoload.php";
$data = array(
    'name' => $_POST["name"],
    'link' => $_POST["link"],
    'is_premium' => $_POST["is_premium"]
);
$to = new TourOperator($data);
$manager = new Manager;

$manager->createTourOperator($to);

header("Location: ../admin.php?success=Tour Operator added !");
