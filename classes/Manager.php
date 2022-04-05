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

    public function addRating($id, $rating){
        $this->bdd->update(TourOperator::$TABLE_TO, $id, $rating);
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

    public function getDestination($id){
        $data = $this->bdd->selectOne(Destination::$TABLE_DESTINATION, $id);
        return new Destination($data);
    }

    public function getOperatorByDestination($value){
        $data = $this->bdd->selectAllWhere(Destination::$TABLE_DESTINATION, "location", $value);
        function operatorDestinationToObject($sql){
            return new Destination($sql);
        }
        $newData = array_map("operatorDestinationToObject", $data);  
        return $newData;
    }
    
    public function getReviewByOperatorId($id){
        $data = $this->bdd->selectOne(Review::$TABLE_REVIEW, $id);
        return new Review($data);
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