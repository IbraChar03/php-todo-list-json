<?php
header("Access-Control-Allow-Origin: http://localhost:5174");
header("Access-Control-Allow-Headers: X-Requested-With");
header("Content-Type: application/json");
$id = $_GET["id"];
$status = $_GET["taskStatus"];
$text = $_GET["txt"];
if ($status == "false") {
    $bool = false;
}
$jsonList = file_get_contents("results.json", true);
$todoList = json_decode($jsonList);

$todoList[$id] = [
    "text" => $text,
    "complete" => $status
];
$jsonList = json_encode($todoList);
file_put_contents("results.json", $jsonList);