<?php

class TourOperator {
    private $id;
    private $name;
    private $link;
    private $gradeCount;
    private $gradeTotal;
    private $isPremium;
    static public $TABLE_TO = 'tour_operator';


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

    public function toSql() {
        return array(
            'id' => $this->getId(),
            'name' => $this->getName(),
            'link' => $this->getLink(),
            'grade_count' => $this->getGradeCount(),
            'grade_total' => $this->getGradeTotal(),
            'is_premium' => $this->getIsPremium()
        );
    }

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function getLink(){
        return $this->link;
    }

    public function getGradeCount(){
        return $this->gradeCount;
    }

    public function getGradeTotal(){
        return $this->gradeTotal;
    }

    public function getGrade(){
        return ;//moyenne 
    }

    public function getIsPremium(){
        return $this->isPremium;
    }
}