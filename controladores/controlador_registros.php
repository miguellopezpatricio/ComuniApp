<?php

include_once('conexion.php');
include_once('modelos/registro.php');
include_once('modelos/persona.php');



class ControladorRegistros
{

    public function inicio()
    {

        $registros = Registro::consultar();

        include_once('vistas/registros/inicio.php');
    }


    public function consultarRegistrosApartamento()
    {

        $apartamento = $_GET['apartamento'];
        $registros = Registro::consultarRegistrosApartamento($apartamento);
        include_once('vistas/registros/listado_apartamento.php');
    }

    public function crear()
    {

        if ($_POST) {
            //  print_r($_POST);
            $id = 0;
            $fecha = $_POST['fecha'];
            $apartamento = $_POST['apartamento'];
            $lecturaAnterior = $_POST['lecturaanterior'];
            $lecturaActual = 0;
            $agua = $_POST['agua'];
            $comunidad = $_POST['comunidad'];
            $ingreso = $_POST['ingreso'];
            $infoVivienda = $_POST['infovivienda'];
            $infoContador = "";
            $recibo = 0;
            $adjunto = "";



            Registro::crear($id, $fecha, $apartamento, $lecturaAnterior, $lecturaActual, $agua, $comunidad, $ingreso, $infoVivienda, $infoContador, $recibo, $adjunto);

            // header('Location:./?controlador=registros&accion=inicio');
            header('Location:./?controlador=registros&accion=consultarRegistrosApartamento&apartamento='.$apartamento);

        }

        include_once('vistas/registros/crear.php');
    }

    public function editar()
    {



        if ($_POST) {
            $id = $_POST['id'];
            $fecha = $_POST['fecha'];
            $apartamento = $_POST['apartamento'];
            $lecturaAnterior = $_POST['lant'];
            $lecturaActual = $_POST['lact'];
            $agua = $_POST['agua'];
            $comunidad = $_POST['comunidad'];
            $saldo = $_POST['saldo'];
            $ingreso = $_POST['ingreso'];
            $infoVivienda = $_POST['infovivienda'];
            // $infoContador = $_POST['infocontador'];
            $recibo = 0;
            $adjunto = "";


            Registro::editar($id, $fecha, $apartamento,$lecturaAnterior, $lecturaActual, $agua, $comunidad, $saldo, $ingreso, $infoVivienda,$recibo, $adjunto);
            // header('Location:./?controlador=registros&accion=inicio');

            header('Location:./?controlador=registros&accion=consultarRegistrosApartamento&apartamento='.$apartamento);

        }

        $id = $_GET['id'];


        $registro = (Registro::buscar($id));
        include_once('vistas/registros/editar.php');
    }


   

    public function mostrar()
    {



        if ($_POST) {
            $id = $_POST['id'];
            $fecha = $_POST['fecha'];
            $apartamento = $_POST['apartamento'];
            $nombre = $_POST['nombre'];
            $lecturaAnterior = $_POST['lecturaant'];
            // $lecturaActual = $_POST['lecturaactual'];
            $agua = $_POST['agua'];
            $comunidad = $_POST['comunidad'];
            $ingreso = $_POST['ingreso'];
            $cargo = $_POST['cargomes'];
            $infoVivienda = $_POST['infovivienda'];
            // $infoContador = $_POST['infocontador'];
            $adjunto = $_POST['adjunto'];

            echo $_POST['cargomes'];


            Registro::recibo($id,$fecha, $apartamento, $nombre, $lecturaAnterior, $agua, $comunidad, $cargo, $ingreso, $infoVivienda, $adjunto);
            // header('Location:./?controlador=registros&accion=inicio');

            header('Location:./?controlador=registros&accion=consultarRegistrosApartamento&apartamento='.$apartamento);

        }

        $id = $_GET['id'];


        $registro = (Registro::buscar($id));
        $listaPersonas = (Persona::buscarPersonaApartamento($registro->apartamento));
       // print_r($listaPersonas);

       $contando = 0;

       if($listaPersonas == null){
           $contando = 0;
       } else{
           $contando = count($listaPersonas);
       }
       echo 'ELEMENTOS ARRAY PERSONAS DE ESTA VIVIENDA: '. $contando;
        include_once('vistas/registros/mostrar.php');
    }


    public function borrar()
    {
        //  print_r($_GET);

        // CUIDADO HAY QUE COMPROBAR, SI EXISTE EL REGISTRO TIENE INFORMACIÓN EN EL CAMPO INFOCONTADOR, NO SE PUEDE ELIMINAR

        $id = $_GET['id'];
      //  $apartamento = $_GET['apartamento']
        Registro::borrar($id);
       header('Location:./?controlador=registros&accion=inicio');
     // header('Location:./?controlador=registros&accion=consultarRegistrosApartamento&apartamento='.$apartamento);

    }

    public function ver_recibo(){
    
        if ($_POST) {
          $id = $_POST['id'];
          $fecha = $_POST['fecha'];
          $vivienda = $_POST['vivienda'];
          $lecturaAnterior = $_POST['lant'];
          $lecturaActual = $_POST['lact'];
          $agua = $_POST['agua'];
          $comunidad = $_POST['comunidad'];
          $cargo = $_POST['cargo'];

          $ingreso = $_POST['ingreso'];
          $infoVivienda = $_POST['info'];
            // $infoContador = $_POST['infocontador'];
          $saldo = $_POST['cargo'];
          $recibo = $_POST['recibo'];
          $adjunto = $_POST['adjunto']; 
           
           
           
            // Registro::recibo($apartamento, $cargo);
            // header('Location:./?controlador=registros&accion=inicio');


         //   header('Location:./?controlador=registros&accion=consultarRegistrosApartamento&apartamento='.$vivienda);

        }



        include_once('vistas/registros/ver_recibo.php');

    }

    public function enviar_correo(){
    
        if ($_POST) {
          $id = $_POST['id'];
          $fecha = $_POST['fecha'];
          $vivienda = $_POST['vivienda'];
          $lecturaAnterior = $_POST['lant'];
          $lecturaActual = $_POST['lact'];
          $agua = $_POST['agua'];
          $comunidad = $_POST['comunidad'];
          $cargo = $_POST['cargo'];

          $ingreso = $_POST['ingreso'];
          $infoVivienda = $_POST['info'];
            // $infoContador = $_POST['infocontador'];
          $saldo = $_POST['cargo'];
          $recibo = $_POST['recibo'];
          $adjunto = $_POST['adjunto']; 

           
           
           
            // Registro::recibo($apartamento, $cargo);
            // header('Location:./?controlador=registros&accion=inicio');


          //  header('Location:./?controlador=registros&accion=consultarRegistrosApartamento&apartamento='.$vivienda);

        }



        include_once('vistas/registros/envia_correo.php');

    }


   




}
