<?php 


class Destination {
    
    private $id;
    private $location;
    private $price;
    private $image;
    private $tourOperatorId;
    static public $TABLE_DESTINATION = 'destination';


    private function hydrate($data) 
    {
        $this->id = $data['id'] ?? null;
        $this->location = $data['location'] ;
        $this->price = $data['price'] ;
        $this->tourOperatorId = $data['tour_operator_id'] ;
        $this->image = $data['image'] ;
    }

    public function __construct($data){
        $this->hydrate($data);
    }

    public function toSql() {
        return array(
            'id' => $this->getId(),
            'location' => $this->getLocation(),
            'price' => $this->getPrice(),
            'tour_operator_id' => $this->getTourOperatorId(), 
            'image' => $this->getImage()  
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

    function getImage(){
        return $this->image;
    }
}