<?php 
class Destination {
    
    private $id;
    private $location;
    private $price;
    private $image;
    private $description;
    private $adventure;
    private $food;
    private $rhum;
    private $earn_money;
    private $tourOperatorId;
    static public $TABLE_DESTINATION = 'destination';

    private function hydrate($data) {
        $this->id = $data['id'] ?? null;
        $this->location = $data['location'] ;
        $this->price = $data['price'] ?? null;
        $this->image = $data['image'] ;
        $this->description = $data['description'] ?? null;
        $this->adventure = $data['adventure'] ?? 0;
        $this->food = $data['food'] ?? 0;
        $this->rhum = $data['rhum'] ?? 0;
        $this->earn_money = $data['earn_money'] ?? 0;
        $this->tourOperatorId = $data['tour_operator_id'] ?? null ;
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
            'description' => $this->getDescription(),
            'adventure' => $this->getAdventure(),
            'food' => $this->getFood(),
            'rhum' => $this->getRhum(),
            'earn_money' => $this->getEarnMoney(),
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

    public function getAdventure(){
        return $this->adventure;
    }

    public function getFood(){
        return $this->food;
    }

    public function getRhum(){
        return $this->rhum;
    }

    public function getEarnMoney(){
        return $this->earn_money;
    }

    public function getDescription(){
        return $this->description;
    }

    public function getTourOperatorId(){
        return $this->tourOperatorId;
    }

}