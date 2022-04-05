<?php
include "../config/autoload.php";
$data = array(
    'message' => $_POST["message"],
    'author' => $_POST["author"],
    'tour_operator_id' => $_POST["tour_operator_id"]
);
$comment = new Review($data);
$manager = new Manager;

$manager->createReview($comment);
