<?php 

class Manager {
    private $bdd;

    public function __construct() {
        $this->bdd = new Database();
    } 

    public function createTourOperator($tourOperator) {
        $this->bdd->insertInto(TourOperator::$TABLE_TO, $tourOperator->toSql());
    }
  
    public function createDestination($destination) {
        $this->bdd->insertInto(Destination::$TABLE_DESTINATION, $destination->toSql());
    }
 
    public function createReview($review){
        $this->bdd->insertInto(Review::$TABLE_REVIEW, $review->toSql());
    }

    public function getAllOperator(){
        $data = $this->bdd->selectAll(TourOperator::$TABLE_TO);

        function toObject($sql){
            return new TourOperator($sql);
        }
        $newData = array_map("toObject", $data);  
        return $newData;
    }

    public function getOperator($id){
        $data = $this->bdd->selectOne(TourOperator::$TABLE_TO, $id);
        return new TourOperator($data);
    }
    
    public function getAllDestinations(){  
        $data = $this->bdd->selectAll(Destination::$TABLE_DESTINATION);

        function destinationToObject($sql){
            return new Destination($sql);
        }
        $newData = array_map("destinationToObject", $data);  
        return $newData;
    }

    public function getOperatorByDestination($destination){
        // $tourOperatorId = $this->bdd->selectOne(Destination::$TABLE_DESTINATION, $destination->getTourOperatorId());
        // $tourOperator = $this->bdd->selectOne(TourOperator::$TABLE_TO, $tourOperatorId);
    }
    
    public function getReviewByOperatorId(){
    }

    public function updateOperatorPremiumStatus($tourOperator) {
        if($tourOperator->getIsPremium() == 0) {
            $value = 1;
        }else{
            $value = 0;
        }
        $this->bdd->update(TourOperator::$TABLE_TO, $tourOperator->getId(), ["is_premium"=>$value]);
    }

}