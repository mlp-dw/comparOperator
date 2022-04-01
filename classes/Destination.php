<?php 


class Destination
{
    private $id;
    private $location;
    private $price;
    private $tourOperatorId;

    private function hydrate($data) 
    {
        $this->id = $data['id'];
        $this->location = $data['location'] ;
        $this->price = $data['price'] ;
        $this->tourOperatorId = $data['tour_operator_id'] ;
    }

    function __construct($data)
    {
        $this->hydrate($data);
    }


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

    function getTourOperator($tourOperatorId)
    {
        $this->tour_operator_id = $tourOperatorId;
    }
}