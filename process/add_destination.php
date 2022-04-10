<?php
include "../config/autoload.php";
$isLocationProvided = isset($_POST["location"]) && !empty($_POST["location"]);
$isPriceProvided = isset($_POST["price"]) && !empty($_POST["price"]);
$isImageProvided = isset($_POST["image"]) && !empty($_POST["image"]);
$sDescriptionProvided = isset($_POST["description"]) && !empty($_POST["description"]);
$isTourIdProvided = isset($_POST["tour_operator_id"]) && !empty($_POST["tour_operator_id"]);

if($isLocationProvided && $isPriceProvided && $isImageProvided && $isTourIdProvided){
    $data = array(
        'location' => $_POST["location"],
        'price' => $_POST["price"],
        'image' => $_POST["image"],
        'description' => $_POST["description"],
        'tour_operator_id' => $_POST["tour_operator_id"]
    );
    $where = new Destination($data);
    $manager = new Manager;
    
    $manager->createDestination($where);
    
    header("Location: ../admin.php?success=Destination added !");
}else{
    header("Location: ../admin_pages/add_destination.php?error=Please, fill all the entries.");
}

