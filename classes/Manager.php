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
        $this->database->insertInto(TourOperator::$TABLE_TO, $tourOperator->toSql());
    }
  
    public function createDestination($destination)
    {
        $this->bdd->insertInto(Destination::$TABLE_DESTINATION, $destination->toSql());
    }
 
    
    function createReview(){
        
    }

    function getAllOperator(){
        $this->bdd-> ;
    }
    
    public function getAllDestinations(){
        $this->bdd-> ;
        
    }

    function getOperatorByDestination($price){
        $this->bdd-> ;
    }
    
    function getReviewByOperatorId($tourOperatorId){
        $this->bdd-> ;
    }

    function updateOperatorToPremium(){
        $this->bdd-> ;
    }

}