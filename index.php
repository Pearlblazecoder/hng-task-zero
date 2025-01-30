<?php

// Enable CORS for specific origins (recommended for production)
$allowed_origins = [
    'http://localhost:8000',
    'https://hng-task-zero-production.up.railway.app/', 
];


// Set content type and allow GET requests
header("Content-Type: application/json; charset=UTF-8");
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Allow-Headers: Content-Type, Authorization');

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