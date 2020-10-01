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

    function GetPelicula($titulo_pelicula){
        $sentencia = $this->db->prepare("SELECT * FROM peliculas WHERE titulo=?");
        $sentencia->execute(array($titulo_pelicula));
        //print_r($sentencia->fetch(PDO::FETCH_OBJ)); 
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    function GetTask($id_task){
        $sentencia = $this->db->prepare("SELECT * FROM task WHERE id=?");
        $sentencia->execute(array($id_task));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    function GetGeneros(){
        $sentencia = $this->db->prepare("SELECT * FROM genero");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);

    }

    function GetPeliculasConGenero(){
        //$sentencia = $this->db->prepare("SELECT * FROM peliculas INNER JOIN genero ON peliculas.titulo = genero.nombre");
        $sentencia = $this->db->prepare("SELECT peliculas.titulo, genero.nombre FROM peliculas INNER JOIN genero ON peliculas.id_genero = genero.id_genero");
        $sentencia->execute();
        //print_r( $sentencia->fetchAll(PDO::FETCH_OBJ));// vemos que este cargado y con que 
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

}