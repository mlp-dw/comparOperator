<?php 

class Manager
{
    private $bdd;

    public function __construct() 
    {
        $this->bdd = new Database();
    }    static public $TABLE = 'tour_operator';

    function createTourOperator($tourOperator)
    {
        $this->bdd->insertInto(TourOperator::$TABLE_TO, $tourOperator->toSql());
    }
  
    public function createDestination($destination)
    {
        $this->bdd->insertInto(Destination::$TABLE_DESTINATION, $destination->toSql());
    }
 
    
    function createReview(){
        
    }

    function getAllOperator(){
        
    }
    
    public function getAllDestinations(){
        
        
    }

    function getOperatorByDestination($price){
        
    }
    
    function getReviewByOperatorId($tourOperatorId){
        
    }

    function updateOperatorToPremium(){
        
    }

}