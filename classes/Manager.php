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
    
    function createTourOperator()
    {
        
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