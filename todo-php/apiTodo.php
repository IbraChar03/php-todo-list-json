<?php
header("Access-Control-Allow-Origin: http://localhost:5174");
header("Access-Control-Allow-Headers: X-Requested-With");
header("Content-Type: application/json");

$jsonList = file_get_contents("results.json");
echo $jsonList;