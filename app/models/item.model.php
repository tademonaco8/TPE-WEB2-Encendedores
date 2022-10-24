<?php

class ItemModel {

private $db;
public $id;

public function __construct() {
    $this->db = new PDO('mysql:host=localhost;'.'dbname=encendedores;charset=utf8', 'root', '');
}

public function getAllItems() {
    $query = $this->db->prepare("SELECT * FROM `encendedor`");
    $query->execute();
    $lighters = $query->fetchAll(PDO::FETCH_OBJ);
    return $lighters;
}


public function GetItemById($id){
    $query = $this->db->prepare("SELECT * FROM encendedor E LEFT JOIN tipo D ON E.tipo_FK = D.id_tipo WHERE id = ?;");
    $query->execute([$id]);
    $lighter = $query->fetch(PDO::FETCH_OBJ);
    return $lighter;
}

}