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
        $this->image = $data['image'] ;
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
            'image' => $this->getImage(),
            'tour_operator_id' => $this->getTourOperatorId()    
        );
    }

    public function getId(){
        return $this->id;
    }

    public function getLocation(){
        return $this->location ;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getImage(){
        return $this->image;
    }

    public function getTourOperatorId(){
        return $this->tourOperatorId;
    }

}