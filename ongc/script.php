<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$data = $_GET['db-name'];

// Create a connection
$conn = new mysqli($servername, $username, $password, $data);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `table1`";
$result =  mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){
    $records[] = $row;
} 

$encoded_data = json_encode($records, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
file_put_contents($data. ".json", $encoded_data);
?>