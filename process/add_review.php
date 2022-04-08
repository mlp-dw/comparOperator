<?php
include "../config/autoload.php";

$isMessageProvided = isset($_POST["message"]) && !empty($_POST["message"]);
$isAuthorProvided = isset($_POST["author"]) && !empty($_POST["author"]);
$isTourIdProvided = isset($_POST["tour_operator_id"]) && !empty($_POST["tour_operator_id"]);
$isCountProvided = isset($_POST["count"]) && !empty($_POST["count"]);
$isRatingProvided = isset($_POST["rating"]) && !empty($_POST["rating"]);

$idDestination = $_POST["id-destination"];

function redirection($idDestination){
    $manager = new Manager();
    $destination = $manager->getDestination($idDestination);
    header("Location: ../destination.php?location=" . $destination->getLocation());
}


if($isMessageProvided && $isAuthorProvided && $isTourIdProvided && $isCountProvided && $isRatingProvided){
 
    // ADD COMMENT------------------------------
    $data = array(
        'message' => $_POST["message"],
        'author' => $_POST["author"],
        'tour_operator_id' => $_POST["tour_operator_id"]
    );
    $comment = new Review($data);
    $manager = new Manager();
    $manager->createReview($comment);

    // ADD RATING------------------------------
    $id = $_POST["tour_operator_id"];
    $operator = $manager->getOperator($id);
    $rating = array(
        'grade_count' => $operator->getGradeCount() + $_POST["count"],
        'grade_total' => $operator->getGradeTotal() + $_POST["rating"]
    );
    $manager->addRating($id, $rating);

    // REDIRECTION-----------------------------
    redirection($idDestination);
}else{
    redirection($idDestination);
}