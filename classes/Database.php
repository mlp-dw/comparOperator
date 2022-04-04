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

    public function update($table, $id, $values){
        
        $request = 'UPDATE ' . $table . ' SET ';
        foreach ($values as $key => $value) 
        {
            $request .= $key . " = '".$value."',";
        }
        $request = substr($request, 0, -1);
        $request .= "WHERE id = " . $id;

        $query = $this->db->prepare($request);
        $query->execute();
    }


    public function selectOne($table, $id){
    // On récupère les données d'une ligne SQL en spécifiant la table et l'id que l'on cherche
    $request = $this->db->query("SELECT * FROM $table WHERE id = '$id'");
    $data = $request->fetch();

    // On retourne les données brutes
    return $data;

    }

    public function selectAll($table){
        $request = $this->db->prepare("SELECT * FROM $table");
        $request->execute();
        $data = $request->fetchAll();

        return $data;
    }

    public function selectAllWhere($table, $key, $value){
        $request = $this->db->prepare("SELECT * FROM $table WHERE $key = '$value'");
        $request->execute();
        $data = $request->fetchAll();

        return $data;
    }
}