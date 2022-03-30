<?php

session_start();


if (!isset($_SESSION['nombre'])) {
    header('Location:login.php');
}



$controlador = 'paginas';
$accion = 'inicio';




if (isset($_GET['controlador']) && isset($_GET['accion'])) {


    if (($_GET['controlador'] != "") && ($_GET['accion'] != "")) {
        $controlador = $_GET['controlador'];
        $accion = $_GET['accion'];
    }

    $controlador = $_GET['controlador'];

    $accion = $_GET['accion'];
}



    switch ($_SESSION['rol']) {
        case 1: // ADMINISTRADOR
            require_once('vistas/template.php');
            break;
        case 2: // USUARIO LECTOR CONTADORES
            require_once('vistas/template_contador.php');

            break;
    }


