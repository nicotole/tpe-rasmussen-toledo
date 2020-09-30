<?php

require_once "./libs/smarty/Smarty.class.php";

class peliculasView{

    

    //private $title;
    
    function __construct(){
       //$this->title = "Lista de Tareas";
    }

    function ShowHome($peliculas, $generos){
        $smarty = new Smarty();
        //$smarty->assign('titulo_s', $this->title);
        $smarty->assign('peliculas_s', $peliculas);
        $smarty->assign('generos_s', $generos);
        $smarty->display('templates/home.tpl'); // muestro el template 
    }

    function ShowHomeLocation(){
        header("Location: ".BASE_URL."home");
    }

    function ShowGeneros($Generos){
        $smarty = new Smarty();
        $smarty->assign('generos_s', $Generos);
        $smarty->display('templates/generos.tpl');
    }
}