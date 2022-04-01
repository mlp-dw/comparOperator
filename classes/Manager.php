<?php 

class Manager
{
    private $bdd;

    public function __construct() {
        $this->bdd = new Database();
    }

    public function createDestination($destination){
        $this->bdd->insertInto(Destination::$TABLE_DESTINATION, $destination->toSql());
    }
    

    function createTourOperator($TourOperator){
        $this->database->add($TourOperator->toSql());
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