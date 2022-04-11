<?php
include "../config/autoload.php";

$location = htmlspecialchars($_POST["location"]);
$price = htmlspecialchars($_POST["price"]);
$image = htmlspecialchars($_POST["image"]);
$description = htmlspecialchars($_POST["description"]);
$adventure = htmlspecialchars($_POST["adventure"]);
$food = htmlspecialchars($_POST["food"]);
$rhum = htmlspecialchars($_POST["rhum"]);
$earn_money = htmlspecialchars($_POST["earn_money"]);
$tourOperatorId = $_POST["tour_operator_id"];

$isLocationProvided = isset($location) && !empty($location);
$isPriceProvided = isset($price) && !empty($price);
$isImageProvided = isset($image) && !empty($image);
$sDescriptionProvided = isset($description) && !empty($description);
$isAvdventureProvided = isset($adventure) && !empty($adventure);
$isFoodProvided = isset($food) && !empty($food);
$isRhumProvided = isset($rhum) && !empty($rhum);
$isEarnMoneyProvided = isset($earn_money) && !empty($earn_money);
$isTourIdProvided = isset($tourOperatorId) && !empty($tourOperatorId);

if($isLocationProvided && $isPriceProvided && $isImageProvided && $isTourIdProvided){
    $data = array(
        'location' => $location,
        'price' => $price,
        'image' => $image,
        'description' => $description,
        'adventure' => $adventure,
        'food' => $food,
        'rhum' => $rhum,
        'earn_money' => $earn_money,
        'tour_operator_id' => $tourOperatorId
    );
    $where = new Destination($data);
    $manager = new Manager;
    
    $manager->createDestination($where);
    
    header("Location: ../admin.php?success=Destination added !");
}else{
    header("Location: ../admin_pages/add_destination.php?error=Please, fill all the entries.");
}

