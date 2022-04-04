<?php 

class Manager {
    private $bdd;

    public function __construct() {
        $this->bdd = new Database();
    } 

    function createTourOperator($tourOperator) {
        $this->bdd->insertInto(TourOperator::$TABLE_TO, $tourOperator->toSql());
    }
  
    public function createDestination($destination) {
        $this->bdd->insertInto(Destination::$TABLE_DESTINATION, $destination->toSql());
    }
 
    function createReview($review){
        $this->bdd->insertInto(Review::$TABLE_REVIEW, $review->toSql());
    }

    function getAllOperator(){
        $data = $this->bdd->selectAll(TourOperator::$TABLE_TO);

        function toObject($sql){
            return new TourOperator($sql);
        }
        $newData = array_map("toObject", $data);  
        return $newData;
    }
    
    public function getAllDestinations(){  
        $data = $this->bdd->selectAll(TourOperator::$TABLE_TO);

        function destinationToObject($sql){
            return new Destination($sql);
        }
        $newData = array_map("toObject", $data);  
        return $newData;
    }

    function getOperatorByDestination($destination){
        // $tourOperatorId = $this->bdd->selectOne(Destination::$TABLE_DESTINATION, $destination->getTourOperatorId());
        // $tourOperator = $this->bdd->selectOne(TourOperator::$TABLE_TO, $tourOperatorId);
    }
    
    function getReviewByOperatorId(){
    }

    function updateOperatorPremiumStatus($tourOperator) {
        if($tourOperator->getPremium() == 0) {
            $value = 1;
        }else{
            $value = 0;
        }
        $this->bdd->update(TourOperator::$TABLE_TO, $tourOperator->getId(), ["is_premium"=>$value]);
    }

}