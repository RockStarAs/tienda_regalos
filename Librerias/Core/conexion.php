<?php
    class Conexion{
        private $connect;

        public function __construct(){
            $cadena_conexion = "sqlsrv:server=".DB_HOST.";database=".DB_NAME;
            try{
                $this->connect = new PDO($cadena_conexion,DB_USER,DB_PASSWORD);
                $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);;
            }catch(Exception $e){
                echo "Ocurrió un error al tratar de conectarse a la base de datos: ".$e->getMessage();
            }
        }
        public function conexion_bd(){
            return $this->connect;
        }
    }
?>