<?php
include "../config/autoload.php";

$isNameProvided = isset($_POST["name"]) && !empty($_POST["name"]);
$isLinkProvided = isset($_POST["link"]) && !empty($_POST["link"]);
$isPremiumProvided = isset($_POST["is_premium"]) && !empty($_POST["is_premium"]);

if($isNameProvided && $isLinkProvided && $isPremiumProvided){

    $data = array(
        'name' => $_POST["name"],
        'link' => $_POST["link"],
        'is_premium' => $_POST["is_premium"]
    );
    $to = new TourOperator($data);
    $manager = new Manager;
    $manager->createTourOperator($to);

    header("Location: ../admin.php?success=Tour Operator added !");
}else{
    header("Location: ../admin_pages/add_tourOperator.php?error=Please, fill all the entries.");
}
