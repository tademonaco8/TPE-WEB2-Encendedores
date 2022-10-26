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
    $query = $this->db->prepare("UPDATE encendedor SET `producto` = '$product', `tipo_FK`= '$type', `precio`= '$price', `descripcion`= '$description', `img_url`= '$img_url' WHERE `id` = '$id'");
    if($img_url!=""){
        $query->execute([$product, $type, $price, $description, $img_url, $id]);
    }
    $query->execute([$product, $type, $price, $description, null, $id]);
    // return $this->db->lastInsertId();
}

public function InsertCat($type, $description){
    $query = $this->db->prepare("INSERT INTO tipo (tipo_gas, descripcion_tipo) VALUES ('$type', '$description')");
    $query->execute();
    // return $this->db->lastInsertId();
}
public function editCat($type, $description, $id){
    $query = $this->db->prepare("UPDATE tipo SET `tipo_gas`= '$type', `descripcion_tipo`= '$description' WHERE `id_tipo` = '$id'");
    $query->execute();
    // return $this->db->lastInsertId();
}

function deleteItemById($id) {
    $query = $this->db->prepare('DELETE FROM `encendedor` WHERE id = ?');
    $query->execute([$id]);
}

function deleteCatById($id) {
    $query = $this->db->prepare('DELETE FROM `tipo` WHERE id_tipo = ?');
    $query->execute([$id]);
}
}