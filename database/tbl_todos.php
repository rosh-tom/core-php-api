<?php

include 'database.php';

$table_name = "todos";

$tbl_todos = "CREATE TABLE ". $table_name ."(
    id int(11) unsigned auto_increment primary key,
    todo varchar(255) not null,
    created_at timestamp default current_timestamp,
    updated_at timestamp default current_timestamp on update current_timestamp
)";

$tbl_todos = Database::query($tbl_todos);

echo print_r($tbl_todos);


