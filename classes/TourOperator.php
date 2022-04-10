<?php
class TourOperator{
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
        $this->gradeCount = $data['grade_count'] ?? 0;
        $this->gradeTotal = $data['grade_total'] ?? 0 ;
        $this->isPremium = $data['is_premium'] ?? 0;
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

    public function getGradeCount(){ //nombre de notes obtenues
        return $this->gradeCount;
    }

    public function getGradeTotal(){ // addition de toutes les notes
        return $this->gradeTotal;
    }

    public function getGrade(){
        if ($this->gradeCount == 0 || $this->gradeTotal == 0) {
            return 0;
        }
        return number_format($this->gradeTotal / $this->gradeCount, 0);//moyenne
    }

    public function getIsPremium(){
        return $this->isPremium;
    }
}