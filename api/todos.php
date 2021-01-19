<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../model/todo.php';  


$todos_arr = array();
$todo = new Todo();  
$todos_arr['todos']=$todo->todos(); 

echo json_encode($todos_arr);

// $num = $result->rowCount();
 
// if($num > 0){
//     $post_arr = array();
//     $post_arr['todos'] = array(); 
//     while($row = $result->fetch(PDO::FETCH_ASSOC)){
//         extract($row);
//         $todos_item = array(
//             'id' => $id,
//             'todo' => $todo
//         );

//         array_push($post_arr['todos'], $todos_item);
//     } 
//     echo json_encode($post_arr); 
// }else{
//     echo json_encode(array('message' => 'No Todos Found.'));

// }

// if($todo->todos()->rowCount() != 0){ 
//     echo json_encode($todo->todos());
// }
// else{
//     echo json_encode(array('message' => 'No Post Found'));
// // } 
 
//   echo json_encode($todos_arr);


