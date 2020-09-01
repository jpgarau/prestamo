<?php

    if($peticionAjax){
        require_once "../config/server.php";
    }else{
        require_once "./config/server.php";
    }

    class MainModel{

        /*------ Funcion conectar a BD ------*/
        protected static function conectar(){
            $mysqli = new mysqli(SERVER, USER, PASS, DB);
        }
    }