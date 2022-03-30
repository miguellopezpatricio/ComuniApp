<?php

session_start();

include_once('conexion.php');

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$conexion = BD::crearInstancia();
$sql = $conexion->prepare('SELECT * FROM usuarios WHERE nombre=? AND clave=?;');

$sql->execute([$usuario, $password]);

$resultado = $sql->fetch(PDO::FETCH_OBJ);

// print_r($resultado);


if($resultado === FALSE){

    header('Location:login.php');

}elseif($sql->rowCount() == 1){
     $_SESSION['nombre'] = $resultado->nombre;
     $_SESSION['rol'] = $resultado->rol;
     header('Location:index.php?controlador=usuarios?accion=inicio');


}

?>