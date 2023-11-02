<?php

@include 'config.php';
header('Access-Control-Allow-Origin: http://localhost:3000'); // change this to your React app's URL
header('Access-Control-Allow-Credentials: true');
header('Content-Type: application/json');

session_start();

if(isset($_SESSION['user_name'])){
   $data = [
       "name" => $_SESSION['user_name'],
       "cfid" => $_SESSION['cfid'],
   ];
   echo json_encode($data);
} else {
   http_response_code(401);
   echo json_encode(["error" => "Not logged in"]);
}