<?php
include "../config/autoload.php";
$name = htmlspecialchars($_POST["name"]);
$link = htmlspecialchars($_POST["link"]);
$isNameProvided = isset($name) && !empty($name);
$isLinkProvided = isset($link) && !empty($link);
$isPremiumProvided = isset($_POST["is_premium"]) && !empty($_POST["is_premium"]);


if($isNameProvided && $isLinkProvided && $isPremiumProvided){

    $data = array(
        'name' => $name,
        'link' => $link,
        'is_premium' => $_POST["is_premium"]
    );
    $to = new TourOperator($data);
    $manager = new Manager;
    $manager->createTourOperator($to);

    header("Location: ../admin.php?success=Premium Tour Operator added !");
}elseif($isNameProvided && $isLinkProvided){
    $data = array(
        'name' => $name,
        'link' => $link,
        'is_premium' => $_POST["is_premium"]
    );
    $to = new TourOperator($data);
    $manager = new Manager;
    $manager->createTourOperator($to);

    header("Location: ../admin.php?success=Tour Operator added !");
}else{
    header("Location: ../admin_pages/add_tourOperator.php?error=Please, fill all the entries.");
}