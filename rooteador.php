<?php


// echo $controlador;
// echo $accion;

/* 
 VERIFICAR CON SWITH QUE LA VARIABLE CONTROLADOR SOLO PUEDE CONTENER 4 VALORES DIFERENTES:
  CONTADORES, PAGINAS, PERSONAS O REGISTROS
*/

if($_SESSION['rol']==2){
    $controlador = "contadores";
}else{

switch($controlador){
    case "contadores":
        $controlador = "contadores";
        break;
    case "registros":
        $controlador = "registros";
        break;
    case "personas":
        $controlador = "personas";
        break;

    default:
        $controlador  ="paginas";
    }
}

include_once('controladores/controlador_'.$controlador.'.php');

$objControlador = "Controlador".ucfirst($controlador);

$controlador = new $objControlador();

$controlador->$accion();


?>