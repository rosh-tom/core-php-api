<?php


class Database {
    private static function connect(){ 
        //Creating database
        // $conn = new PDO("mysql:host=localhost", "root", "");  
        $dbname = "todo_api";
        $host   = "localhost";
        $conn = new PDO("mysql:host=$host;dbname=$dbname", "root", "");   
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $conn;
    }

    public static function query($query){
        $conn = self::connect();
        if($conn->exec($query)){
            return true;
        }else{ 
            return false; 
        }
    }
}