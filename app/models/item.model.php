<?php

class ItemModel {

private $db;
public $id;

public function __construct() {
    $this->db = new PDO('mysql:host=localhost;'.'dbname=encendedores;charset=utf8', 'root', '');
}

public function GetItemById($id){
    $query = $this->db->prepare("SELECT * FROM encendedor WHERE id = ?");
    $query->execute([$id]);
    $lighter = $query->fetchAll(PDO::FETCH_OBJ);
    return $lighter;
}

public function GetRelatedItems($category){
    $query = $this->db->prepare("SELECT producto FROM encendedor WHERE tipo_FK = $category");
    $query->execute();
    $related = $query->fetchAll(PDO::FETCH_OBJ);
    return $related;
}

}