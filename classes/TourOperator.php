<?php

class TourOperator {
    private $id;
    private $name;
    private $link;
    private $gradeCount;
    private $gradeTotal;
    private $isPremium;

    public function __construct($data) {
        $this->hydrate($data);
    }

    private function hydrate($data) {
        $this->id = $data['id'] ?? null;
        $this->name = $data['name'] ;
        $this->link = $data['link'] ;
        $this->gradeCount = $data['grade_count'] ;
        $this->gradeTotal = $data['grade_total'] ;
        $this->isPremium = $data['is_premium'] ;
    }

    public function getId(){

    }

    public function getName(){

    }

    public function getLink(){

    }

    public function getGradeCount(){

    }

    public function getGrade(){

    }

    public function getIsPremium(){
        
    }
}