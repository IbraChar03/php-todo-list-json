<?php
header("Access-Control-Allow-Origin: http://localhost:5173");
header("Access-Control-Allow-Headers: X-Requested-With");
header("Content-Type: application/json");
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
        "complete" => false
    ],
];
echo json_encode($todoObj);
echo "ciao";