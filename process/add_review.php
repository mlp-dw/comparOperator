<?php
include "../config/autoload.php";
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
$idDestination = $_POST["id-destination"];
$destination = $manager->getDestination($idDestination);

header("Location: ../destination.php?location=" . $destination->getLocation());