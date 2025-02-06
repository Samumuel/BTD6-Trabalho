<?php 

class Conexao
{

    private static $con = null;

    public static function getCon()
    {
        if(self::$con == null){
            $opcoes = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);

        $dadosCon = "mysql:host=localhost:3306;dbname=btd6";
        
        self::$con = new PDO($dadosCon, "root", "", $opcoes);

        
        
        }
        return self::$con;
    }
}