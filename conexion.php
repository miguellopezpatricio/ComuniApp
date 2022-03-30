<?php

    class BD{

        private static $instancia =NULL;

        public static function crearInstancia(){

            if(!self::$instancia){
                $opcionesPDO[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
                self::$instancia = new PDO('mysql:host=localhost;dbname=comunidad_beta','root','',$opcionesPDO);

                // echo 'CONECTADO A BBDD';


            }
            return self::$instancia;


        }


    }



?>