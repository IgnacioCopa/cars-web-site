<?php

class connection{

    public static function conect(){
        
        //PDO("nombre del servidor; "nombre de la base de datos"; "usuario"; "contraseña");
        $link = new PDO("mysql:host=localhost:3310;dbname=gewinngruppe","root","");

        $link ->exec("set names utf8");
        return $link;
    }
}


?>