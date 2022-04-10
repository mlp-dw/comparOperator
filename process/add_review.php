<?php
include "../config/autoload.php";
$message = htmlspecialchars($_POST["message"]);
$author = htmlspecialchars($_POST["author"]);
$rating = htmlspecialchars($_POST["rating"]);

$isMessageProvided = isset($message) && !empty($message);
$isAuthorProvided = isset($author) && !empty($author);
$isTourIdProvided = isset($_POST["tour_operator_id"]) && !empty($_POST["tour_operator_id"]);
$isCountProvided = isset($_POST["count"]) && !empty($_POST["count"]);
$isRatingProvided = isset($rating) && !empty($rating);

$idDestination = $_POST["id-destination"];

function redirection($idDestination){
    $manager = new Manager();
    $destination = $manager->getDestination($idDestination);
    header("Location: ../destination.php?location=" . $destination->getLocation());
}

if($isMessageProvided && $isAuthorProvided && $isTourIdProvided && $isCountProvided && $isRatingProvided){
 
    // ADD COMMENT------------------------------
    $data = array(
        'message' => $message,
        'author' => $author,
        'tour_operator_id' => $_POST["tour_operator_id"]
    );
    $comment = new Review($data);
    $manager = new Manager();
    $manager->createReview($comment);

    // ADD RATING------------------------------
    $id = $_POST["tour_operator_id"];
    $operator = $manager->getOperator($id);
    $ratingData = array(
        'grade_count' => $operator->getGradeCount() + $_POST["count"],
        'grade_total' => $operator->getGradeTotal() + $rating
    );
    $manager->addRating($id, $ratingData);

    // REDIRECTION-----------------------------
    redirection($idDestination);
}else{
    redirection($idDestination);
}