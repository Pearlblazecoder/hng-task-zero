<?php

// Enable CORS for ALL origins 
header("Access-Control-Allow-Origin: *"); 

// Handle Preflight OPTIONS Request
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    header('Access-Control-Allow-Methods: GET'); 
    header('Access-Control-Allow-Headers: Content-Type, Authorization'); 
    http_response_code(204);
    exit;
}

// Set content type for actual responses
header("Content-Type: application/json; charset=UTF-8");

// Handle GET request
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $email = "favourudoh2020@gmail.com";
    $current_datetime = gmdate("Y-m-d\TH:i:s\Z");
    $github_url = "https://github.com/Pearlblazecoder/hng-task-zero";

    $response = [
        "email" => $email,
        "current_datetime" => $current_datetime,
        "github_url" => $github_url
    ];
    http_response_code(200);
    echo json_encode($response, JSON_UNESCAPED_SLASHES);
} else {
    http_response_code(405);
    echo json_encode(["error" => "Only GET requests are allowed."]);
}