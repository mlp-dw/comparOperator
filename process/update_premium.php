<?php
include "../config/autoload.php";

$toId = $_POST["tour_operator_id"];
$isIdProvided = isset($toId) && !empty($toId);

if($isIdProvided){
    $manager = new Manager;

    $operator = $manager->getOperator($toId);
    $manager->updateOperatorPremiumStatus($operator);

    header("Location: ../admin.php?success=" . $operator->getName() . " pass premium !");
}else{
    header("Location: ../admin_pages/pass_premium.php?error=Please, choose a Tour Operator.");
}