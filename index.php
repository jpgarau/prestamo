<?php 
    require_once './config/app.php';
    require_once './controladores/vistasControlador.php';

    $plantilla = new VistasControlador();
    const STATICDIR = __DIR__;
    $plantilla->obtener_plantilla_controlador();