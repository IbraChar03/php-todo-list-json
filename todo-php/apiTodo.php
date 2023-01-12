<?php
header("Access-Control-Allow-Origin: http://localhost:5173");
header("Access-Control-Allow-Headers: X-Requested-With");
header("Content-Type: application/json");

// $todoObj = [
//     [
//         "text" => "Workout",
//         "complete" => false
//     ],
//     [
//         "text" => "Send emails",
//         "complete" => false
//     ],
//     [
//         "text" => "Send emails2",
//         "complete" => false
//     ],

// ];

// $jsonList = json_encode($todoObj);
// file_put_contents("results.json", $jsonList);

$jsonList = file_get_contents("results.json", true);
$todoList = json_decode($jsonList);
echo json_encode($todoList);