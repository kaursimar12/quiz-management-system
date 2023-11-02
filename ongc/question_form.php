<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    /* CSS Styles for the Form */
    .form-container {
      max-width: 100vw;
      height : 100vh;
      margin:  auto;
      background :#7F8F9F;
      padding : 10px 10px;
      display : flex;
      justify-content : center;
      /* align-items : center; */
      font-weight :  bold;
      font-size: 30px;
    }
    #correct_option{
      width:495px;
      height:57px;
    }
    .form-group {
      margin-bottom: 15px;
    }

    .form-label {
      display: block;
      margin-bottom: 5px;
    }

    .form-input {
      text-align :center;
      background : #B8BFC2;
      width: 25vw;
      height :40px;
      padding: 5px;
      font-size: 30px;
      border-radius : 10px;
      border : 3px solid black;

    }

    .form-submit {
      padding: 10px 20px;
      font-size: 16px;
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
    }
    #question{
      height:100px;
      width:800px;
    }
    .form-submit:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>

<?php
global $data;
echo $data;
$data = $_GET['db-name'];

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = $data;

// Create a connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Database name to check
$databaseName = $data;

// SQL query
$sql = "SELECT COUNT(*) AS db_exists
        FROM information_schema.SCHEMATA
        WHERE SCHEMA_NAME = '$data'";

// Execute the query
$result = $conn->query($sql);

// Check if the query was successful
if ($result === false) {
    die("Error executing the query: " . $conn->error);
}

// Fetch the result as an associative array
$row = $result->fetch_assoc();

// Get the value of the 'db_exists' column
$dbExists = $row['db_exists'];

// Output the result
if ($dbExists) {
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = $data;

    // Create a connection
    $conn = new mysqli($servername, $username, $password,$data);
    echo "Connected to database $data";
    
  } else {
      // Database connection parameters
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = $data;

      // Create database 
      $sql = "CREATE DATABASE `$data`";
      $result1 = mysqli_query($conn, $sql);
      $conn1 = mysqli_connect($servername, $username, $password, $dbname);


      if($result1){
        //creating a table
        $sql = "CREATE TABLE `$data`.`questions` (`sno` INT(11) NOT NULL AUTO_INCREMENT , `question` VARCHAR(200) NOT NULL , `option_a` VARCHAR(200) NOT NULL , `option_b` VARCHAR(200) NOT NULL , `option_c` VARCHAR(200) NOT NULL , `option_d` VARCHAR(200) NOT NULL ,`correct_option` VARCHAR(200) NOT NULL,`isVisited` BOOLEAN NOT NULL DEFAULT FALSE , `isAnswered` BOOLEAN NOT NULL DEFAULT FALSE , `usersResponse` VARCHAR(100) DEFAULT NULL,`dbname` VARCHAR(20) NOT NULL DEFAULT '$data', PRIMARY KEY(`sno`) )";            
        $result2 = mysqli_query($conn1, $sql);
            if($result2){

                  }
                  else{
                      echo "The table was not created successfully because of this error ----><br>". mysqli_error($conn1);
              }

      }
    else{
        echo "The databse was not created successfully because of this error ----><br>". mysqli_error($conn);
    }

}

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  $question = $_POST['question'];
  $option_a = $_POST['option_1'];
  $option_b = $_POST['option_2'];
  $option_c = $_POST['option_3'];
  $option_d = $_POST['option_4'];
  $correct_option = $_POST['correct_option'];
echo "Question: " . $question . "<br>";
echo "Option 1: " . $option_a . "<br>";
echo "Option 2: " . $option_b . "<br>";
echo "Option 3: " . $option_c . "<br>";
echo "Option 4: " . $option_d . "<br>";
echo "Correct Option: " . $correct_option . "<br>";
echo "SQL Statement: " . $sql . "<br>";
  echo "DB_exists";
  $sql = "INSERT INTO `questions` (`question`, `option_a`,`option_b`,`option_c`,`option_d`,`correct_option`) VALUES ('$question', '$option_a','$option_b','$option_c','$option_d','$correct_option')";

    // Execute the SQL statement
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } 
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

  }

// script.php

// Create a connection
$conn = new mysqli($servername, $username, $password, $data);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `questions`";
$result =  mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){
    $records[] = $row;
} 

$encoded_data = json_encode($records, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
file_put_contents($data. ".json", $encoded_data);



// Close the connection
$conn->close();
?>

<div class="form-container">
  <form action="" method="POST">
      <div class="form-group">
        <label for="question" class="form-label">Question:</label>
        <textarea id="question" class="form-input" name="question" rows="6" cols="50" required></textarea>
      </div>
    <div class="form-group">
      <label for="option_a" class="form-label">Option_a:</label>
      <input type="text" id="option_a" class="form-input" name="option_1" required>
    </div>
    <div class="form-group">
      <label for="option_b" class="form-label">Option_b:</label>
      <input type="text" id="option_b" class="form-input" name="option_2" required>
    </div>
    <div class="form-group">
      <label for="option_c" class="form-label">Option_c:</label>
      <input type="text" id="option_c" class="form-input" name="option_3" required>
    </div>
    <div class="form-group">
      <label for="option_d" class="form-label">Option_d:</label>
      <input type="text" id="option_d" class="form-input" name="option_4" required>
    </div>
      <div class="form-group">
        <label for="correct_option" class="form-label">Correct Option:</label>
        <select id="correct_option" class="form-input" name="correct_option" required>
          <option value="none" selected>Select</option>
          <option value="0">Option a</option>
          <option value="1">Option b</option>
          <option value="2">Option c</option>
          <option value="3">Option d</option>
        </select>
      </div>
    <input type="submit" value="Submit" class="form-submit">
    <a href="/ongc">Home</a>
  </form>
</div>
</body>
</html>