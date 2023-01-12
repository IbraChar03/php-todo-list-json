<?php
header("Access-Control-Allow-Origin: http://localhost:5173");
header("Access-Control-Allow-Headers: X-Requested-With");
header("Content-Type: application/json");
$addTodo = $_GET["addTodo"];
$jsonList = file_get_contents("results.json", true);
$todoList = json_decode($jsonList);
$todoList[] = [
    "text" => $addTodo,
    "complete" => false
];
$jsonList = json_encode($todoList);
file_put_contents("results.json", $jsonList);