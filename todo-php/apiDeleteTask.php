<?php
header("Access-Control-Allow-Origin: http://localhost:5174");
header("Access-Control-Allow-Headers: X-Requested-With");
header("Content-Type: application/json");
$id = $_GET["id"];
$list = $_GET["list"];
var_dump($list);
$jsonList = file_get_contents("results.json", true);
$todoList = json_decode($jsonList);
// $todoList[$id] = [];
unset($todoList[$id]);
$jsonList = json_encode($todoList);
file_put_contents("results.json", $jsonList);