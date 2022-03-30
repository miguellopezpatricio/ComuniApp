<?php


class Contador{

    public $id;
    public $fecha;
    public $apartamento;
    public $lectura;
    public $observaciones;

    public function __construct($id, $fecha, $apartamento, $lectura, $observaciones){
        
        $this->id = $id;
        $this->fecha = $fecha;
        $this->apartamento = $apartamento;
        $this->lectura = $lectura;
        $this->observaciones = $observaciones;


    }



    public static function consultar(){

        $listaContadores = [];
        $conexionBD = BD::crearInstancia();
        $sql = $conexionBD->query("SELECT * FROM registros ORDER BY fecha, apartamento");

        foreach($sql->fetchAll() as $contador){

            $listaContadores[] = new Contador($contador['id'], $contador['fecha'], $contador['apartamento'],$contador['lecturaactual'], $contador['infocontador']);
            

        }

        return $listaContadores;

    }


    public static function consultarRegistrosApartamento($apartamento){

        $listaContadores = [];
        $conexionBD = BD::crearInstancia();

        $sql = $conexionBD->prepare("SELECT id, fecha, apartamento, lecturaactual, infocontador FROM registros WHERE apartamento=? ORDER BY fecha");

      //  $sql = $conexionBD->prepare("SELECT r.id, r.fecha, r.apartamento, p.nombre, r.lecturaanterior, r.lecturaactual, r.agua, r.comunidad, r.ingreso, r.infovivienda, r.infocontador FROM registros r INNER JOIN personas p WHERE r.apartamento=? ORDER BY r.fecha");



   

        $sql->bindParam(1,$apartamento,PDO::PARAM_STR);
        $sql->execute();

        foreach($sql->fetchAll() as $registro){
            if($registro['lectura']=0){
                $registro['lectura']=1;
            }

            $listaContadores[] =  new Contador($registro['id'], $registro['fecha'], $registro['apartamento'], 
            $registro['lecturaactual'], $registro['infocontador']);


            

        }


        if($listaContadores==null){
            echo 'NO HAY REGISTROS DE CONTADORES PARA LA VIVIENDA SELECCIONADA: ' .$apartamento;
        }

        return $listaContadores;

    }


    public static function crear($fecha, $apartamento, $lectura, $observaciones){

        $conexionBD = BD::crearInstancia();

        $apartamento = strtoupper($apartamento);

        $agua = 3.15;
        $comunidad = 30;

        $sql = $conexionBD->prepare("INSERT INTO registros(fecha,apartamento,lecturaactual,agua,comunidad,infocontador) VALUES(?,?,?,?,?,?)");

        $sql->execute(array($fecha, $apartamento, $lectura, $agua, $comunidad, $observaciones));


    }

    // DESDE OPCIÓN CONTADORES NO SE PERMITE BORRAR REGISTROS

    /*

    public static function borrar($id){
        $conexionBD = BD::crearInstancia();
        $sql = $conexionBD->prepare("DELETE FROM contadores WHERE id=?");
        $sql->execute(array($id));


    } */

    public static function buscar($id){
        $conexionBD = BD::crearInstancia();
        $sql = $conexionBD->prepare("SELECT * FROM registros WHERE id=?");
        $sql->execute(array($id));
        $contador = $sql->fetch();

        return new Contador($contador['id'], $contador['fecha'], $contador['apartamento'],$contador['lecturaactual'], $contador['infocontador']);


    }


    public static function consultarListaContadorPorApartamento($apartamento){

        $listaContadores = [];
        $conexionBD = BD::crearInstancia();
        $sql = $conexionBD->query("SELECT * FROM registros WHERE apartamento=?");
        $sql->execute(array($apartamento));

        foreach($sql->fetchAll() as $contador){

            $listaContadores[] = new Contador($contador['id'], $contador['fecha'], $contador['apartamento'],$contador['lectura'], $contador['infocontador']);
            

        }

        return $listaContadores;

    }




    public static function editar($id,$fecha, $apartamento, $lectura, $observaciones){
        $conexionBD = BD::crearInstancia();

        $apartamento = strtoupper($apartamento);

        $sql = $conexionBD->prepare("UPDATE registros SET fecha=?,apartamento=?,lecturaactual=?,infocontador=? WHERE id=?");
        $sql->execute(array($fecha, $apartamento, $lectura, $observaciones,$id));


        
    }



}

?>
