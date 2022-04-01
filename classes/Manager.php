<?php 

class Manager
{
    private $bdd;

    function __construct($bdd)
    {
        $this->database = new Database();
    }

    function createDestination($destination)
    {

    }
    
    function createTourOperator($TourOperator)
    {
        $this->database->add($TourOperator->toSql());
    }
    
    function createReview()
    {
        
    }

    function getAllOperator($id)
    {
        
    }
    
    function getAllDestination($id)
    {
    
    }

    function getOperatorByDestination($price)
    {
        
    }
    
    function getReviewByOperatorId($tourOperatorId)
    {
        
    }

    function updateOperatorToPremium()
    {
        
    }

}