<?php
include "../config/autoload.php";
$data = $_POST["tour_operator_id"];
$manager = new Manager;

$operator = $manager->getOperator($data);
$manager->updateOperatorPremiumStatus($operator);
