<?php 


class Destination
{
    private $id;
    private $location;
    private $price;
    private $tourOperatorId;
    static public $TABLE = 'destination';

    private function hydrate($data) 
    {
        $this->id = $data['id'] ?? null;
        $this->location = $data['location'] ;
        $this->price = $data['price'] ;
        $this->tourOperatorId = $data['tour_operator_id'] ;
    }

    function __construct($data)
    {
        $this->hydrate($data);
    }

    // public function toSql() {
    //     return array(
    //         'id' => $this->getId(),
    //         'location' => $this->getLocation(),
    //         'price' => $this->getPrice(),
    //         'tour_operator_id' => $this->getTourOperatorId()    
    //     );
    // }

    function getId($id)
    {
        $this->id = $id;
    }

    function getLocation($location)
    {
        $this->location = $location;
    }

    function getPrice($price)
    {
        $this->price = $price;
    }

    function getTourOperatorId($tourOperatorId)
    {
        $this->tourOperatorId = $tourOperatorId;
    }
}