<?php

//Controlador frontal, recoge parámetros get por url, carga el archivo y método al que pertenecen

session_start();

//Acceso a todos los controladores
require_once 'autoload.php';

require_once 'config/db.php';
require_once 'config/parameters.php';
require_once 'helpers/utils.php';
require_once 'views/layout/header.php';
require_once 'views/layout/sidebar.php';


function show_error(){
    $error = new errorController();
    $error->index();
}

//Comprobar que llega el controlador por la url y generar variable
if (isset($_GET['controller'])){
    $nombre_controlador = $_GET['controller'].'Controller';

}elseif (!isset($_GET['controller']) && !isset($_GET['action'])){
    $nombre_controlador = controller_default;

}else{
    show_error();
    exit();
}

//Comprobar que esxiste la clase del controlador y crear objeto
if(class_exists($nombre_controlador)){
    $controlador = new $nombre_controlador();

    //Comprobar que llega la acción y el método existe
    if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
        $action = $_GET['action'];
        $controlador->$action();

    }elseif (!isset($_GET['controller']) && !isset($_GET['action'])){
        $action_default = action_default;
        $controlador->$action_default();

    }else{
        show_error();
    }

}else{
    show_error();
}

require_once 'views/layout/footer.php';



?>