<?php
//var_dump($_GET['controlador']);

if (isset($_GET['c'])) {
    require_once "inicio.controlador.php";
    $controlador = new InicioController();
    
    call_user_func(array($controlador,$_GET("inicio")));
    else{
        $controlador = $_GET['c'];
        require_once($controlador) . 'controlador.php';
        $controlador = ucwords($_GET['c']);
        $controlador = new $controlador();
        $accion = isset($_GET['a'])?$_GET['a']:'inicio';
        call_user_func(array($controlador,$accion);
        
        


