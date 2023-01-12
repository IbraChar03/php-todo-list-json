<?php
header("Access-Control-Allow-Origin: http://localhost:5173");
header("Access-Control-Allow-Headers: X-Requested-With");
header("Content-Type: application/json");
$prova = $_GET["prova"];
$todoObj = [
    [
        "text" => "todo1",
        "complete" => false
    ],
    [
        "text" => "todo2",
        "complete" => false
    ],
    [
        "text" => "todo3",
        "complete" => $prova
    ],
];

$jsonList = json_encode($todoObj);
file_put_contents("results.json", $jsonList);
$jsonList = file_get_contents("results.json", true);
$todoList = json_decode($jsonList);
$todoObj[] = [
    "text" => "todo4",
    "complete" => false
];
$jsonList = json_encode($todoObj);
file_put_contents("results.json", $jsonList);

$jsonList = file_get_contents("results.json", true);
$todoList = json_decode($jsonList);
echo json_encode($todoList);