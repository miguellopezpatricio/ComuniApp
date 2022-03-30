<?php


class Registro{

    public $id;
    public $fecha;
    public $apartamento;
    public $persona;
    public $lecturaAnterior;
    public $lecturaActual;
    public $agua;
    public $comunidad;
    public $saldo;
    public $ingreso;
    public $infoVivienda;
    public $infoContador;
    public $recibo;
    public $adjunto;




    public function __construct($id, $fecha, $apartamento, $persona, $lecturaAnterior, $lecturaActual, $agua, $comunidad, $saldo, $ingreso, $infoVivienda, $infoContador, $recibo,$adjunto){
        
        $this->id = $id;
        $this->fecha = $fecha;
        $this->apartamento = $apartamento;
        $this->persona = $persona;
        $this->lecturaAnterior = $lecturaAnterior;
        $this->lecturaActual = $lecturaActual;
        $this->agua = $agua;
        $this->comunidad = $comunidad;
        $this->saldo = $saldo;
        $this->ingreso = $ingreso;
        $this->infoVivienda = $infoVivienda;
        $this->infoContador = $infoContador;
        $this->recibo = $recibo;
        $this->adjunto = $adjunto;



    }





    public static function consultar(){

        $listaRegistros = [];
        $conexionBD = BD::crearInstancia();
        $sql = $conexionBD->query("SELECT * FROM registros");

        foreach($sql->fetchAll() as $registro){

            $listaRegistros[] = new Registro($registro['id'], $registro['fecha'], $registro['apartamento'], $registro['nombre'] = "",
                                            $registro['lecturaanterior'], $registro['lecturaactual'], $registro['agua'],
                                            $registro['comunidad'], $registro['saldo'], $registro['ingreso'], 
                                            $registro['infovivienda'], $registro['infocontador'], $registro['recibo'], $registro['adjunto']);
            

        }

        return $listaRegistros;

    }

    public static function consultarRegistrosApartamento($apartamento){

        $listaRegistros = [];
        $conexionBD = BD::crearInstancia();

        $sql = $conexionBD->prepare("SELECT id, fecha, apartamento, lecturaanterior, lecturaactual, agua, comunidad, saldo, ingreso, infovivienda, infocontador, recibo, adjunto FROM registros WHERE apartamento=? ORDER BY fecha");

      //  $sql = $conexionBD->prepare("SELECT r.id, r.fecha, r.apartamento, p.nombre, r.lecturaanterior, r.lecturaactual, r.agua, r.comunidad, r.ingreso, r.infovivienda, r.infocontador FROM registros r INNER JOIN personas p WHERE r.apartamento=? ORDER BY r.fecha");



   

        $sql->bindParam(1,$apartamento,PDO::PARAM_STR);
        $sql->execute();

        foreach($sql->fetchAll() as $registro){
            if($registro['lectura']=0){
                $registro['lectura']=1;
            }

            $listaRegistros[] =  new Registro($registro['id'], $registro['fecha'], $registro['apartamento'],  "",
            $registro['lecturaanterior'], $registro['lecturaactual'], $registro['agua'],
            $registro['comunidad'], $registro['saldo'],  $registro['ingreso'], $registro['infovivienda'], 
            $registro['infocontador'], $registro['recibo'], $registro['adjunto']);

        }


        if($listaRegistros==null){
            echo 'NO HAY REGISTROS PARA LA VIVIENDA SELECCIONADA: ' .$apartamento;
        }

        return $listaRegistros;

    }




    public static function crear($fecha, $apartamento, $lecturaAnterior, $lecturaActual, $agua, $comunidad, $saldo, $ingreso, $infoVivienda, $infoContador, $recibo, $adjunto){

        $conexionBD = BD::crearInstancia();

        $apartamento = strtoupper($apartamento);


        $sql = $conexionBD->prepare("INSERT INTO registros(fecha, apartamento, lecturaanterior,lecturaactual , agua, comunidad,saldo,ingreso, infovivienda, infocontador, recibo, adjunto) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)");

        $sql->execute(array($fecha, $apartamento, $lecturaAnterior, $lecturaActual, $agua, $comunidad,$saldo, $ingreso, $infoVivienda, $infoContador, $recibo, $adjunto));


    }

    public static function borrar($id){
        $conexionBD = BD::crearInstancia();
        $sql = $conexionBD->prepare("DELETE FROM registros WHERE id=?");
        $sql->execute(array($id));


    }

    public static function buscar($id){
        $conexionBD = BD::crearInstancia();
        $sql = $conexionBD->prepare("SELECT * FROM registros  WHERE id=?");
        $sql->execute(array($id));
        $registro = $sql->fetch();


    

        return  new Registro($registro['id'], $registro['fecha'], $registro['apartamento'], '',
        $registro['lecturaanterior'], $registro['lecturaactual'], $registro['agua'],
        $registro['comunidad'], $registro['saldo'], $registro['ingreso'], $registro['infovivienda'], 
        $registro['infocontador'], $registro['recibo'], $registro['adjunto']);


    }

    public static function editar($id,$fecha, $apartamento, $lecturaAnterior, $lecturaActual, $agua, $comunidad,$saldo, $ingreso, $infoVivienda, $adjunto){
        $conexionBD = BD::crearInstancia();
        $apartamento = strtoupper($apartamento);
        

        // cuando se actualiza se debería poner a 0 el campo recibo
        $sql = $conexionBD->prepare("UPDATE registros 
                                        SET fecha=?, apartamento=?, lecturaactual=?, agua=?, comunidad=?, saldo=?, ingreso=?, infovivienda=?, recibo=?, adjunto=?
                                        WHERE id=?");
        $sql->execute(array($fecha, $apartamento, $lecturaActual, $agua, $comunidad, $saldo, $ingreso,  $infoVivienda,0, $adjunto, $id));


        
    }

    public static function actualizaRecibo($id){
        $conexionBD = BD::crearInstancia();
     
     // cuando se manda enviar recibo se debería poner a 1 el campo recibo
        
        $sql = $conexionBD->prepare("UPDATE registros 
                                        SET recibo=?
                                        WHERE id=?");
        $sql->execute(array( 1, $id));

 

    }

    public static function recibo($vivienda, $cargo){
     

        
    }

    public static function guardaAdjunto($id, $adjunto){
        $conexionBD = BD::crearInstancia();
        

        // cuando se actualiza se debería poner a 0 el campo recibo
        $sql = $conexionBD->prepare("UPDATE registros 
                                        SET  adjunto=?
                                        WHERE id=?");
        $sql->execute(array($adjunto, $id));



    }



}

?>
