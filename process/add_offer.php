<?php
include "../config/autoload.php";
$manager = new Manager;
$location = $_POST["destination"];
$image = $manager->properImage($location)[0]["image"];
// var_dump($image);
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
