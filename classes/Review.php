<?php
class Review {
    private $id;
    private $message;
    private $author;
    private $tourOperatorId;

    
    public function __construct($data) {
        $this->hydrate($data);
    }

    private function hydrate($data) {
        $this->id = $data['id'] ?? null;
        $this->message = $data['message'] ;
        $this->author = $data['author'] ;
        $this->tourOperatorId = $data['tour_operator_id'] ;
    }
    public function getId(){

    }

    public function getMessage(){

    }

    public function getAuthor(){

    }
    public function getTourOperatorId(){
        
    }
}