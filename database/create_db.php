<?php
 
include 'database.php';

$dbname = "todo_api";

$create_db = Database::query("create database ". $dbname);

if($create_db){
    echo "Success";
}else{
    print_r($create_db);
}