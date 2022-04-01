<?php 

class Manager
{
    private $bdd;
    

    public function __construct() 
    {
        $this->bdd = new Database();
    }    static public $TABLE = 'tour_operator';

    function createDestination($destination)
    {
        $this->bdd->insertInto();
    }
    
    function createTourOperator($TourOperator)
    {
        $this->database->insertInto(TourOperator::$TABLE_TO, $TourOperator->toSql());
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