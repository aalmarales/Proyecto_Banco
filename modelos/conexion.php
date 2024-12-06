<?php

class Conexion{

    public static function conectar(){
        try {

            $conex= new PDO("mysql:host=localhost; dbname=banco","root","");

            $conex->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        } catch (Exception $e) {
            echo "Error en la Conexion". $e->getMessage();
        }

        return $conex;
    }
}

?>