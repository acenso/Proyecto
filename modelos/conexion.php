<?php
//CREAMOS UNA CLASE Y UN METODO:

class Conexion
{

    public static function conectar()
    {

        //parametro de conexion:
        $link = new PDO("mysql:host=localhost;dbname=delivery", "root", "");

        $link->exec("set names utf8");

        return $link;

    }

}
