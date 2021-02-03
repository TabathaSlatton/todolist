<?php

//
//echo '<pre>';
//var_dump($_POST);
//echo '</pre>';

$todoName = $_POST['todo_name'] ?? false;
$todoName = trim($todoName);

if($todoName){
    $json = file_get_contents('todo.json');
    echo $json;
//    file_put_contents('todo.json');
}