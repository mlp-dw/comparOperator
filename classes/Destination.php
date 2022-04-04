<?php 


class Destination {
    
    private $id;
    private $location;
    private $price;
    private $tourOperatorId;
    static public $TABLE_DESTINATION = 'destination';


    private function hydrate($data) 
    {
        $this->id = $data['id'] ?? null;
        $this->location = $data['location'] ;
        $this->price = $data['price'] ;
        $this->tourOperatorId = $data['tour_operator_id'] ;
    }

    public function __construct($data){
        $this->hydrate($data);
    }

    public function toSql() {
        return array(
            'id' => $this->getId(),
            'location' => $this->getLocation(),
            'price' => $this->getPrice(),
            'tour_operator_id' => $this->getTourOperatorId()    
        );
    }

    function getId(){
        return $this->id;
    }

    function getLocation(){
        return $this->location ;
    }

    function getPrice(){
        return $this->price;
    }

    function getTourOperatorId(){
        return $this->tourOperatorId;
    }
}