<?php

class DB {
    private static function connect(){
        $servername = "localhost";
        $username   = "root";
        $password   = "";
        $dbname     = "todo_api";
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn; 
    }

    public static function query($query, $params = array()){
        $exploded = explode(' ', $query)[0]; 
        $conn = self::connect();
        $statement = $conn->prepare($query);

        if($statement->execute($params)){
            if($exploded == 'SELECT' || $exploded == 'select'){
                $data = $statement->fetchAll(PDO::FETCH_OBJ);
                return $data; 
            }
            return true;
            // return $statement; 
        }else{
            // return false;
            return $conn->error; 
        }
    }
}

