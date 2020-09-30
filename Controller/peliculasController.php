<?php

require_once "./View/peliculasView.php";
require_once "./Model/peliculasModel.php";

class peliculasController{

    private $view;
    private $model;

    function __construct(){
        $this->view = new peliculasView();
        $this->model = new peliculasModel();
    }

    function Home(){
        echo "Home";
        $peliculas = $this->model->GetPeliculas();
        $this->view->ShowHome($peliculas);
    }
}