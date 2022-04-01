<?php

class Database {
    private $db;

    public function __construct() {
        include __DIR__ . '/../config/db.php';
        $this->db = $db;
    }

    public function insertInto($table, $values){

        $add = 'INSERT INTO ' . $table . ' (';
        foreach ($values as $key => $value) {
            if ($key != 'id') $add .= $key.",";
        }
        $add = substr($add, 0, -1);
        $add .= ') VALUES (';
        foreach ($values as $key => $value) {
            if ($key != 'id') $add .= "'" . $value."',";
        }
        $add = substr($add, 0, -1);
        $add .= ")";
        
        $request = $this->db->prepare($add);
        $request->execute();
    }

    public function update(){

    }

    public function selectOne(){

    }

    public function selectAll($table){
        $request = $this->db->prepare("SELECT * FROM $table");
        $request->execute();
        $data = $request->fetchAll();

        return $data;
    }

    public function selectAllWhere(){
        
    }
}