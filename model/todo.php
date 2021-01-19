<?php

include_once '../config/db.php';

class Todo extends DB{

    private $tbl_name = "todos";

    // public $mytodo; 

    public function todos(){
        $query = "SELECT * FROM ". $this->tbl_name . " ORDER BY created_at DESC";  
        $todos = DB::query($query);
        return $todos; 
    }
  
}
