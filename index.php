<?php

// Enable CORS for any origin (use carefully in production)
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
header("Content-Type: application/json; charset=UTF-8");

// Handle Preflight OPTIONS Request
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(204);
    exit;
}

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
