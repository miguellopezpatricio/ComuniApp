<?php


include_once('conexion.php');
include_once('modelos/persona.php');


class ControladorPersonas{

    public function inicio(){

       $personas = Persona::consultar();

        include_once('vistas/personas/inicio.php');
    }

    public function crear(){

        if($_POST){
          //  print_r($_POST);
            $nombre = $_POST['nombre'];
            $telefono = $_POST['telefono'];
            $correo = $_POST['correo'];
            $apartamento = $_POST['apartamento'];
            $cargo = $_POST['cargo'];

            Persona::crear($nombre, $telefono, $correo, $apartamento, $cargo);

            header('Location:./?controlador=personas&accion=inicio');

        }

        include_once('vistas/personas/crear.php');

    }

    public function editar(){



        if($_POST){
            $id = $_POST['id'];
            $nombre = $_POST['nombre'];
            $telefono = $_POST['telefono'];
            $correo = $_POST['correo'];
            $apartamento = $_POST['apartamento'];
            $cargo = $_POST['cargo'];

            Persona::editar($id, $nombre, $telefono, $correo, $apartamento, $cargo);

            header('Location:./?controlador=personas&accion=inicio');


        }

        $id = $_GET['id'];


        $persona = (Persona::buscar($id));
        include_once('vistas/personas/editar.php');

    }

    public function borrar(){
      //  print_r($_GET);
        $id = $_GET['id'];

        Persona::borrar($id);
        header('Location:./?controlador=personas&accion=inicio');

    }

}


?>
