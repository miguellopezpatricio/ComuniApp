<?php


class Persona
{

    public $id;
    public $nombre;
    public $telefono;
    public $correo;
    public $apartamento;
    public $cargo;

    public function __construct($id, $nombre, $telefono, $correo, $apartamento, $cargo)
    {

        $this->id = $id;
        $this->nombre = $nombre;
        $this->telefono = $telefono;
        $this->correo = $correo;
        $this->apartamento = $apartamento;
        $this->cargo = $cargo;
    }



    public static function consultar()
    {

        $listaPersonas = [];
        $conexionBD = BD::crearInstancia();
        $sql = $conexionBD->query("SELECT * FROM personas ORDER BY apartamento");

        foreach ($sql->fetchAll() as $persona) {

            $listaPersonas[] = new Persona($persona['id'], $persona['nombre'], $persona['telefono'], $persona['correo'], $persona['apartamento'], $persona['cargo']);
        }

        return $listaPersonas;
    }


    public static function buscarPersonaApartamento($apartamento)
    {
        $listaPersonas = [];
        $conexionBD = BD::crearInstancia();

        $sql = $conexionBD->prepare("SELECT * FROM personas WHERE apartamento=?");
        
        $sql->bindParam(1,$apartamento,PDO::PARAM_STR);
        $sql->execute();

        if ($sql == null) {
            $listaPersonas = "";
        } else {
            //   return new Persona($persona['id'], $persona['nombre'], $persona['telefono'], $persona['correo'], $persona['apartamento'], $persona['cargo']);
            foreach ($sql->fetchAll() as $persona) {

                $listaPersonas[] = new Persona($persona['id'], $persona['nombre'], $persona['telefono'], $persona['correo'], $persona['apartamento'], $persona['cargo']);
            }
        }

       // echo var_dump($listaPersonas);

        return $listaPersonas;
    }







    public static function crear($nombre, $telefono, $correo, $apartamento, $cargo)
    {

        $nombre = strtoupper($nombre);
        $correo = strtolower($correo);

        $conexionBD = BD::crearInstancia();

        $sql = $conexionBD->prepare("INSERT INTO personas(nombre, telefono, correo, apartamento, cargo) VALUES(?,?,?,?,?)");

        $sql->execute(array($nombre, $telefono, $correo, $apartamento, $cargo));
    }

    public static function borrar($id)
    {
        $conexionBD = BD::crearInstancia();
        $sql = $conexionBD->prepare("DELETE FROM personas WHERE id=?");
        $sql->execute(array($id));
    }

    public static function buscar($id)
    {
        $conexionBD = BD::crearInstancia();
        $sql = $conexionBD->prepare("SELECT * FROM personas WHERE id=?");
        $sql->execute(array($id));
        $persona = $sql->fetch();

        return new Persona($persona['id'], $persona['nombre'], $persona['telefono'], $persona['correo'], $persona['apartamento'], $persona['cargo']);
    }





    public static function editar($id, $nombre, $telefono, $correo, $apartamento, $cargo)
    {
        $nombre = strtoupper($nombre);

        $apartamento = strtoupper($apartamento);
        $correo = strtolower($correo);


        $conexionBD = BD::crearInstancia();
        $sql = $conexionBD->prepare("UPDATE personas SET nombre=?,telefono=?,correo=?,apartamento=?,cargo=? WHERE id=?");
        $sql->execute(array($nombre, $telefono, $correo, $apartamento, $cargo, $id));
    }
}
