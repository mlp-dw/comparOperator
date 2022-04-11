<?php 
class Manager {
    private $bdd;

    public function __construct() {
        $this->bdd = new Database();
    } 
// -----------------------------------------------------------------------------------------
// CREATE SOMETING---------------------------------------

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
// -----------------------------------------------------------------------------------------
// SELECT SOMETING---------------------------------------
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
        $newData = array_map(function ($sql) {return new Destination($sql);}, $data); 
        return $newData;
    }

    public function getAllLocations(){
        $data = $this->bdd->selectGroupBy("location, image, description, adventure, food, rhum, earn_money", Destination::$TABLE_DESTINATION);
        $newData = array_map(function ($sql) {return new Destination($sql);}, $data);
        return $newData;
    }

    public function getDestination($id){
        $data = $this->bdd->selectOne(Destination::$TABLE_DESTINATION, $id);
        return new Destination($data);
    }

    public function getOperatorByDestination($value){
        $data = $this->bdd->selectAllWhere(Destination::$TABLE_DESTINATION, "location", $value);
        $newData = array_map(function ($sql) {return new Destination($sql);}, $data);  
        return $newData;
    }
    
    
    public function getAllReviewByOperatorId($tourOperatorId){
        $data = $this->bdd->selectAllWhere(Review::$TABLE_REVIEW, "tour_operator_id", $tourOperatorId);
        $newData = array_map(function ($sql) {return new Review($sql);}, $data);  
        return $newData;
    }

    public function updateOperatorPremiumStatus($tourOperator) {
        if($tourOperator->getIsPremium() == 0) {
            $value = 1;
        }else{
            $value = 0;
        }
        $this->bdd->update(TourOperator::$TABLE_TO, $tourOperator->getId(), ["is_premium"=>$value]);
    }

    public function properElement($entries, $value) {
        $data = $this->bdd->selectDistinctWhere($entries, Destination::$TABLE_DESTINATION, "location", $value);
        return $data;
    }

    public function logAdmin($pseudo, $password){
        $data = $this->bdd->selectAdmin($pseudo, $password);
        return $data;
    }

}