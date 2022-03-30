<?php

include_once('conexion.php');
include_once('modelos/contador.php');


class ControladorContadores{

    public function inicio(){

       $contadores = Contador::consultar();

        include_once('vistas/contadores/inicio.php');
    }

    public function consultarRegistrosApartamento()
    {

        $apartamento = $_GET['apartamento'];
        $contadores = Contador::consultarRegistrosApartamento($apartamento);
        include_once('vistas/contadores/listado_contador.php');
    }


    public function crear(){

        if($_POST){
          //  print_r($_POST);
            $fecha = $_POST['fecha'];
            $apartamento = $_POST['apartamento'];
            $lectura = $_POST['lectura'];
            $observaciones = $_POST['observaciones'];

            Contador::crear($fecha, $apartamento, $lectura, $observaciones);

         //   header('Location:./?controlador=contadores&accion=inicio');
         header('Location:./?controlador=contadores&accion=consultarRegistrosApartamento&apartamento='.$apartamento);


        }

        include_once('vistas/contadores/crear.php');

    }

    public function editar(){



        if($_POST){
            $id = $_POST['id'];
            $fecha = $_POST['fecha'];
            $apartamento = $_POST['apartamento'];
            $lectura = $_POST['lectura'];
            $observaciones = $_POST['observaciones'];

            Contador::editar($id, $fecha, $apartamento, $lectura, $observaciones);
         //   header('Location:./?controlador=contadores&accion=inicio');
            header('Location:./?controlador=contadores&accion=consultarRegistrosApartamento&apartamento='.$apartamento);



        }

        $id = $_GET['id'];


        $contador = (Contador::buscar($id));
        include_once('vistas/contadores/editar.php');

    }


     // DESDE OPCION CONTADORES NO SE PUEDEN BORRAR REGISTROS
    /*
    public function borrar(){
      //  print_r($_GET);
        $id = $_GET['id'];

        Contador::borrar($id);
        header('Location:./?controlador=contadores&accion=inicio');

    } */

}


?>
