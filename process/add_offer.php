<?php
include "../config/autoload.php";
$manager = new Manager;
$location = htmlspecialchars($_POST["destination"]);
$image = $manager->properElement("image", $location)[0]["image"];
$price = htmlspecialchars($_POST["price"]);
// $description = $manager->properElement("description", $location)[0]["description"];
// $adventure = $manager->properElement("adventure", $location)[0]["adventure"];
// $food = $manager->properElement("food", $location)[0]["food"];
// $rhum = $manager->properElement("rhum", $location)[0]["rhum"];
// $earnMoney = $manager->properElement("earn_money", $location)[0]["earn_money"];

// echo '<pre>' ;
// var_dump($location,$image,$description,$adventure,$food,$rhum,$earnMoney);
// echo '</pre>';

$isLocationProvided = isset($location) && !empty($location);
$isPriceProvided = isset($price) && !empty($price);
$isTourIdProvided = isset($_POST["tour_operator_id"]) && !empty($_POST["tour_operator_id"]);

if($isLocationProvided && $isPriceProvided && $isTourIdProvided){
    $data = array(
        'location' => $location,
        'price' => $price,
        'image' => $image,
        // 'description' => $description,
        // 'adventure' => $adventure,
        // 'food' => $food,
        // 'rhum' => $rhum,
        // 'earn_money' => $earnMoney,
        'tour_operator_id' => $_POST["tour_operator_id"]
    );
    $offer = new Destination($data);
    $manager->createDestination($offer);
    
    header("Location: ../admin.php?success=New offer successfully added !");

}else{
    header("Location: ../admin_pages/add_offer.php?error=Please, fill all the entries.");
}