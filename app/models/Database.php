<?php
//achei que se fazia conexao na librarie, mas ok

namespace Models;

abstract class Database{
    protected function connectDB(){
        try{
            $con=new \PDO("mysql:host=".HOST.";dbname=".DB."",USER,PASS);
            return $con;
            
        }catch(\PDOException $erro){
            return $erro->getMessage();
        }
    }
}