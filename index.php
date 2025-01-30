<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header('Access-Control-Allow-Methods: GET');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $email = "favourudoh2020@gmail.com";
    $current_datetime = gmdate("Y-m-d\TH:i:s\Z");
    $github_url = "https://github.com/Pearlblazecoder/hng-task-zero"; 

    $response = [  
        "email" => $email,       
        "current_datetime" => $current_datetime,
        "github_url" => $github_url
    ];

    echo json_encode($response);
} else {
    http_response_code(405);
    echo json_encode(["error" => "Only GET requests are allowed."]);
}
?>