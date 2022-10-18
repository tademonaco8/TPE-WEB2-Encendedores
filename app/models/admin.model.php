<?php

class AdminModel {

private $db;

public function __construct() {
    $this->db = new PDO('mysql:host=localhost;'.'dbname=encendedores;charset=utf8', 'root', '');
}

public function InsertItem($product, $type, $price, $description, $img_url) {
    $query = $this->db->prepare("INSERT INTO encendedor (producto, tipo_FK, precio, descripcion, img_url) VALUES (?, ?, ?, ?, ?)");
    if(!isset($img_url)){
        $query->execute([$product, $type, $price, $description, null]);
    }
    $query->execute([$product, $type, $price, $description, $img_url]);
    return $this->db->lastInsertId();
}

public function editItem($id, $product, $type, $price, $description, $img_url){
    $query = $this->db->prepare("UPDATE encendedor SET `producto` = ?, `tipo_FK`= ?, `precio`=?, `descripcion`=?, `img_url`=? WHERE `encendedor`.`id` = ?");
    if(isset($img_url)){
        $query->execute([$product, $type, $price, $description, $img_url, $id]);
    }
    $query->execute([$product, $type, $price, $description, null, $id]);
    return $this->db->lastInsertId();
}

function deleteItemById($id) {
    $query = $this->db->prepare('DELETE * FROM task WHERE id = ?');
    $query->execute([$id]);
}
}