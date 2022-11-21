<?php

    class Postagem {
        public static function selecionaTodos(){
            $con = new PDO('mysql: host=localhost; dbname = blog-php-mvc-crud-mysql;', "root",'');
            var_dump($con);
        }
    }