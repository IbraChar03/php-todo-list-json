<?php
header("Access-Control-Allow-Origin: http://localhost:5173");
header("Access-Control-Allow-Headers: X-Requested-With");
header("Content-Type: application/json");

$jsonList = file_get_contents("results.json", true);
$todoList = json_decode($jsonList);
echo json_encode($todoList);