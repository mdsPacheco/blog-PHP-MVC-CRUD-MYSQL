<?php

    abstract class Connection{
        private static $conn;
        // self pois o atributo é estatico 
        // espaço depois do = da erro
        public static function getConn(){
            if(self::$conn == null){
                self::$conn = new PDO('mysql: host=localhost; dbname=blog-php-mvc-crud-mysql;', "root",'');
            }
            return self::$conn;
        }
    }