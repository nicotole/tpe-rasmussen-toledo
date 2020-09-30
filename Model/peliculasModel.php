<?php

class peliculasModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=cinema_db;charset=utf8', 'root', '');
    }

    function GetPeliculas(){
        $sentencia = $this->db->prepare("SELECT * FROM peliculas");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function GetPelicula($id_peliculas){
        $sentencia = $this->db->prepare("SELECT * FROM peliculas WHERE id=?");
        $sentencia->execute(array($id_peliculas));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

}