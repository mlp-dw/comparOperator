<?php 

class Manager
{
    private $bdd;
    

    public function __construct() {
        $this->bdd = new Database();
    }

    function createDestination($destination){
        $this->bdd->insertInto()
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