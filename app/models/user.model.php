<?php

class UserModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=encendedores;charset=utf8', 'root', '');
    }

    public function getUserByEmail($email) {
        $query = $this->db->prepare("SELECT * FROM `user` WHERE `email` = '$email'");
        $query->execute();
        return $query->fetch(PDO::FETCH_OBJ);
    }

}
