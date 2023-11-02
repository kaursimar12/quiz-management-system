<?php
// Setting headers
header('Access-Control-Allow-Origin: *');  // This is for enabling CORS
header('Content-Type: application/json');  // This is for setting content type as json

// Sample data
$data = [
    "name" => "John Doe",
    "email" => "john@example.com"
];

// Encoding data into json format
echo json_encode($data);
