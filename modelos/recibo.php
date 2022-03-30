<?php

class Recibo{


public $id;
public $fecha;
public $vivienda;
public $recibo;

public function __construct($id, $fecha, $vivienda, $recibo){

    $this->id = $id;
    $this->fecha = $fecha;
    $this->vivienda = $vivienda;
    $this->recibo = $recibo;

}

public static function crear($fecha, $vivienda, $recibo){

    $conexionBD = BD::crearInstancia();

    $vivienda = strtoupper($vivienda);


    $sql = $conexionBD->prepare("INSERT INTO recibos(fecha, vivienda, recibo) VALUES(?,?,?)");

    $sql->execute(array($fecha, $vivienda, $recibo));


}

public static function buscar($id){
    $conexionBD = BD::crearInstancia();
    $sql = $conexionBD->prepare("SELECT * FROM recibos  WHERE id=?");
    $sql->execute(array($id));
    $registro = $sql->fetch();

    return  new Recibo($registro['id'], $registro['data'], $registro['vivienda'], $registro['recibo']);

}

public static function consultar(){

    $listaRegistros = [];
    $conexionBD = BD::crearInstancia();
    $sql = $conexionBD->query("SELECT * FROM recibos");

    foreach($sql->fetchAll() as $registro){

        $listaRegistros[] = new Recibo($registro['id'], $registro['fecha'], $registro['vivienda'],$registro['recibo']);
        

    }

    return $listaRegistros;

}

public static function consultarRecibosApartamento($apartamento){

    $listaRecibos = [];
    $conexionBD = BD::crearInstancia();

    $sql = $conexionBD->prepare("SELECT id, fecha, apartamento, lecturaanterior, lecturaactual, agua, comunidad, saldo, ingreso, infovivienda, infocontador FROM registros WHERE apartamento=? ORDER BY fecha");

  //  $sql = $conexionBD->prepare("SELECT r.id, r.fecha, r.apartamento, p.nombre, r.lecturaanterior, r.lecturaactual, r.agua, r.comunidad, r.ingreso, r.infovivienda, r.infocontador FROM registros r INNER JOIN personas p WHERE r.apartamento=? ORDER BY r.fecha");





    $sql->bindParam(1,$apartamento,PDO::PARAM_STR);
    $sql->execute();

    foreach($sql->fetchAll() as $registro){
        if($registro['lectura']=0){
            $registro['lectura']=1;
        }

        $listaRegistros[] =  new Recibo($registro['id'], $registro['fecha'], $registro['apartamento'],  "",
        $registro['lecturaanterior'], $registro['lecturaactual'], $registro['agua'],
        $registro['comunidad'], $registro['saldo'],  $registro['ingreso'], $registro['infovivienda'], $registro['infocontador']);


        

    }


    if($listaRecibos==null){
        echo 'NO HAY RECIBOS PARA LA VIVIENDA SELECCIONADA: ' .$apartamento;
    }

    return $listaRecibos;

}

}