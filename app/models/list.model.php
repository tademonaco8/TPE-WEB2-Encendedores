<?php

class ListModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=encendedores;charset=utf8', 'root', '');
    }

    public function getAllItems() {
        $query = $this->db->prepare("SELECT * FROM `encendedor`");
        $query->execute();
        $lighters = $query->fetchAll(PDO::FETCH_OBJ);
        return $lighters;
    }

    public function getAllTypes(){
        $query = $this->db->prepare("SELECT `descripcion_tipo` FROM `tipo`");
        $query->execute();  
        $types = $query->fetchAll(PDO::FETCH_OBJ);
        return $types;
    }

    public function sortByCategory($category){
        $query = $this->db->prepare("SELECT * FROM `encendedor` WHERE `tipo_FK` = '$category' ");
        $query->execute();
        $items = $query->fetchAll(PDO::FETCH_OBJ);
        return $items;
    }

    public function GetLighter($id){
        $query = $this->db->prepare("SELECT * FROM `encendedor` WHERE 'id' = $id");
        $query->execute();
        $lighter = $query->fetchAll(PDO::FETCH_OBJ);
        return $lighter;
    }


}