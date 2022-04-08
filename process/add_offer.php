<?php
include "../config/autoload.php";
$manager = new Manager;
$location = $_POST["destination"];
$image = $manager->properImage($location)[0]["image"];

$isLocationProvided = isset($location) && !empty($location);
$isPriceProvided = isset($_POST["price"]) && !empty($_POST["price"]);
$isTourIdProvided = isset($_POST["tour_operator_id"]) && !empty($_POST["tour_operator_id"]);


if($isLocationProvided && $isPriceProvided && $isTourIdProvided){
    // GET LOCATION------------------------------
    $data = array(
        'location' => $location,
        'price' => $_POST["price"],
        'image' => $image,
        'tour_operator_id' => $_POST["tour_operator"]
    );
    $offer = new Destination($data);
    
    $manager->createDestination($offer);
    
    header("Location: ../admin.php?success=New offer successfully added !");
}else{
    header("Location: ../admin_pages/add_offer.php?error=Please, fill all the entries.");
}
