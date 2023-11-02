<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    
    .container {
    width: 96.5vw;
    padding: 20px;
    background: #27374D;
    position: relative;
  }

  .heading {
    width: 100%;
    background: #526D82;
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    padding: 10px;
  }
  
  .heading h1 {
    text-align: center;
    color: white;
    font-weight: bold;
    font-size: 30px;
    margin: auto;
  }
    button{
        background:black;
        color:white;
        height:34px;
        width:100px;
        font-weight:bold;
        
    }
    button:hover{
      cursor:pointer;
      background:grey;
      color:black;
    }
    #top-button {
      text-decoration:none;
    margin-right:100px;
    background: black;
    color: white;
    height: 50px;
    width: 100px;
    font-size:20px;
    font-weight: bold;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
  }
  
  #top-button:hover {
    background: grey;
    color: black;
  }
    .quiz{
        display: flex;
        align-items: center;
        justify-content: center;
    }
    h1 {
      text-align: center;
      height: 50px;
      margin-top: 20px;
      color:white;
      font-weight:bold;
      font-size:50px;
    }
    h2{
      font-size:50px;
      margin-top:20px;
    }
    .form_class{
        display: flex;
        flex-direction:column;
        align-items: center;
        justify-content: center;
        margin-top:10px;
    }
    .existing{
        padding:1rem;
        display:flex;
        flex-direction:column;
        align-items:center;
        background:#9DB2BF;
        width:90%;
        border-radius:1rem;
    }
    .quiz-list {
      width:80%;
      list-style-type: none;
      padding: 15px;
    }

    .create-new{
        display:flex;
        flex-direction:row;
        width:90%;
        margin: 1rem;
        padding: 1rem;
        justify-content:center;
    }
    .dropdown {
      width:100%;
      display: none;
    }
    
    .dropdown ul {
      width:100%;
      list-style-type: none;
      padding: 0;
    }
    
    .dropdown li {
      margin-bottom: 10px;
      font-size: 30px;
      background: #DDE6ED;
      font-weight: bold;
    }
    
    .dropdown li .quiz-actions {
      display: inline-block;
      margin-left: 20px;
    }
    .quiz-name{
        margin:20px;
        font-weight: bold;
        font-size:30px;
    }
    .input-quiz{
        font-size:30px;
        width:500px;
        background: #DDE6ED;
    }
    .quiz-list li {
      margin-bottom: 10px;
      font-size:30px;
      background: #DDE6ED;
      font-weight:bold;
    }
    .all{
        margin-top:20px;
        background:#526D82;
        display:flex;
        flex-direction : column;
        width:100%;
        justify-content:space-evenly;
        align-items:center;
        padding: 1rem;
    }
    .left-box{
      background:#9DB2BF;
      margin : 0rem 1rem;      
      padding:1rem;
      border-radius: 1rem;
    }
    .right-box{
      background:#9DB2BF;
      margin : 0rem 1rem ;    
      padding:1rem;
      border-radius: 1rem;
    }
    .container1{


    }
    .create-form{
      display:flex;
      justify-content: center;
      align-items:center;
      flex-direction:column;
    }
    .host-form{
      display:flex;
      justify-content: center;
      align-items:center;
      flex-direction:column;
    }

    .quiz-list li .quiz-actions {
      display: inline-block;
      margin-left: 20px;
    }
    .quiz-button{
      height:40px;
      width:300px;
      margin-top:20px;
    }
    .slidder{
      display:flex;
      flex-direction:column;
      width:full;
      background:#9DB2BF;
    }
    .slidder-row{
      background:#DDE6ED;
      display:flex;
      flex-direction: column;
      justify-content: center;
      align-items: flex-end;
      width:80%;
    }
    .exist-db{
      display:flex;
      justify-content:space-between;
    }
    .host_dbname{
      margin:20px;
        font-weight: bold;
        font-size:30px;
    }
    .host{
      margin-top:20px;
      display:flex;
      justify-content:center;
    }
    .host_submit{
      font-size:20px;
      width:300px;
      margin-top:25px; 
      padding: ;
    }
    .form-input{
      margin-left:10px;
      text-align :center;
      background : #DDE6ED;
      width: 40vw;
      height :40px;
    }
    .okay{
      width:100%;
      display: flex;
      padding: 1rem;
      justify-content: space-between;
      /* align-items: center; */
      background:#DDE6ED;
      margin-top:20px;
    }
    .container2{
      border : 1px black solid;
      border-radius:  1rem; 
      padding : 1rem;
      display:flex;
      flex-direction:column;
    }
    .container3{
      margin:0.5rem;
      border : 1px black solid;
      border-radius:  1rem; 
      padding : 1rem;
      display:grid;
      grid-template-columns: repeat(2, minmax(0, 1fr));
      gap: 10px;
    }
    .sno{
      grid-column: span 2 / span 2;
      font-weight:600;
    }
    .question{
      grid-column: span 2 / span 2;
      font-weight:800;
    }
    .option_a,.option_b,.option_c,.option_d{
      font-weight:600;
    }
    .correct_option{
      grid-column: span 2 / span 2;
    }
    .host-status{
      text-align:center;
      color: green;
    }
    .host_dbname{
      display: flex;
    justify-content: center;
    }
    @media screen and (max-width: 600px) {
      .container {
        padding: 10px;
      }
    }
  </style>
</head>
<body>
<div class="container">
    <div class="heading">
      <h1>Quiz Management</h1>
      <a href="http://localhost/ongc/result.php/" target="_blank">
        <button id="top-button">Result</button>
      </a>
    </div>
    <div class="all">
      <div class="create-new">

      <div class="left-box">
        <div class="quiz">
          <h2>Create New Quiz</h2>
        </div>
        <div class="form_class">
          <form class="create-form" action="question_form.php" method="get">
            <label for="database" class="quiz-name">Quiz Name:</label>
            <input type="text" id="db-name" name="db-name" class="input-quiz"  required>
            <button type="submit" class="quiz-name quiz-button">Create</button>
          </form>
        </div>
      </div>
        
        <div class="right-box">
          <h2 class="host">Host Existing Database</h2>
          <div class="container1">
          <label for="host_dbname" class="host_dbname">Database Name:</label>

          <?php

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";

// Create a connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['host_dbname'])) {
    $selectedDatabase = $_POST['host_dbname'];
    $db = "hostdb";
    $conn1 = new mysqli($servername, $username, $password, $db);

    //  Check connection
    if ($conn1->connect_error) {
        die("Connection failed: " . $conn1->connect_error);
    }

    $sql1 = "DELETE FROM table1;";
    $result1 = $conn1->query($sql1);

    $sql2 = "INSERT INTO `{$db}`.table1 VALUES('$selectedDatabase')";
    $result2 = $conn1->query($sql2);

    if ($result1 && $result2) {
        echo "<div class='host-status'>* $selectedDatabase is currently hosted.</div>";
    } else {
        echo "Error executing queries: " . $conn1->error;
    }

    $conn1->close();
}

// Retrieve the list of databases excluding the specified ones
$excludeDatabases = array("information_schema", "hostdb", "mysql", "newdb", "performance_schema", "phpmyadmin", "response", "sakila", "sys", "wordpress");
$sql = "SHOW DATABASES WHERE `Database` NOT IN ('" . implode("','", $excludeDatabases) . "')";
$result = $conn->query($sql);

// Check if the query was successful
if ($result === false) {
    die("Error executing the query: " . $conn->error);
}
echo "<form method='post' class='host-form'>";
echo "<select id='host_dbname' class='form-input' name='host_dbname' required>";
echo "<option value='none' selected>Select</option>";
while ($row = $result->fetch_assoc()) {
    $selectedDatabase = $row['Database'];
    echo "<option value='$selectedDatabase'>$selectedDatabase</option>";
}
echo "</select>";
echo "<button type='submit' class='host_submit' name='host_db'>Submit</button>";
echo "</form>";
$conn->close();

?>
      </div>

  </div>
  </div>

        <?php
        // Database connection parameters
        $servername = "localhost";
        $username = "root";
        $password = "";

        // Create a connection
        $conn = new mysqli($servername, $username, $password);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Check if the delete button is clicked
        if (isset($_POST['delete'])) {
            $databaseName = $_POST['database_name'];

            // Check if the database exists
            $sql = "SELECT SCHEMA_NAME FROM information_schema.SCHEMATA WHERE SCHEMA_NAME = '$databaseName'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Delete the database
                $sql = "DROP DATABASE `$databaseName`";
                if ($conn->query($sql) === true) {
                    // echo "Database '$databaseName' deleted successfully.";
                } else {
                    echo "Error deleting database: " . $conn->error;
                }
            } else {
                // echo "Database '$databaseName' does not exist.";
            }
        }

        // Check if the delete row button is clicked
        if (isset($_POST['delete_row'])) {
            $rowId = $_POST['sno'];
            $selectedDatabase = $_POST['selected_database'];
            $table = 'questions';

            // Select the chosen database
            $conn->select_db($selectedDatabase);

            // Delete the row from the table
            $sql = "DELETE FROM $table WHERE sno = '$rowId'";
            if ($conn->query($sql) === true) {
                echo "Row with id '$rowId' deleted successfully.";
            } else {
                echo "Error deleting row: " . $conn->error;
            }
        }

        // Retrieve the list of databases excluding the specified ones
        $excludeDatabases = array("information_schema", "mysql","hostdb", "newdb", "performance_schema","phpmyadmin", "response", "sakila", "sys", "wordpress");
        $sql = "SHOW DATABASES WHERE `Database` NOT IN ('" . implode("','", $excludeDatabases) . "')";
        $result = $conn->query($sql);

        // Check if the query was successful
        if ($result === false) {
            die("Error executing the query: " . $conn->error);
        }

        // Display the list of databases
        echo "<div class='existing'>";
        echo "<h2>List of Existing Quizzes:</h2>";
        echo "<div class='quiz-list'>";
        echo "<div class='slidder'>";
        while ($row = $result->fetch_assoc()) {
            $selectedDatabase = $row['Database'];

            // Select the chosen database
            $conn->select_db($selectedDatabase);

            // Retrieve the contents of a specific table
            $table = 'questions';
            $sql = "SELECT * FROM $table";
            $resultTable = $conn->query($sql);

            // Check if the query was successful
            if ($resultTable === false) {
                die("Error executing the query: " . $conn->error);
            }

            // Display the table contents
            echo "<div class='okay'>";
            echo "<div class='quiz-cont'>";
            echo "<div class='quiz-name'>" . $selectedDatabase . "</div>";
            echo "</div>";

            echo "<div class='slidder-row'>";
            echo "<form method='POST' >";
            echo "<input type='hidden' name='database_name' value='" . $selectedDatabase . "'>";
            echo "<button type='submit' name='delete'>Delete</button>";
            echo "</form>";
            
            if ($resultTable->num_rows > 0) {
              
              // Display the dropdown for row contents
              echo "<button class='edit-button' onclick='toggleDropdown(this)'>Edit</button>";  
   
              echo "<div class='dropdown'>";
              echo "<ul class='quiz-list'>";
              echo "<div class='container2'>";

                while ($rowTable = $resultTable->fetch_assoc()) {
                    if ($resultTable->field_count == 1) {
                        echo "<div class='container3'>" . reset($rowTable) . "</div>";
                    } else {
                        echo "<div class='container3'>";
                        foreach ($rowTable as $key => $value) {
                            echo "<div class='$key'>" . $key . ": " . $value . "</div>";
                        }
                        echo "<form method='POST'>";
                        echo "<input type='hidden' name='sno' value='" . $rowTable['sno'] . "'>";
                        echo "<input type='hidden' name='selected_database' value='" . $selectedDatabase . "'>";
                        echo "<button type='submit' name='delete_row'>Delete</button>";
                        echo "</form>";
                        echo "</div>";
                        
                      
                    }
                }
                echo "</div>";
                echo "</ul>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            } else {
                echo "Table is empty.";
            }
        }
        echo "</div>";
        echo "</div>";
        echo "</div>";
        

        // Close the database connection
        $conn->close();
        ?>

      </div>
    </div>
  </div>
  <script>
    function toggleDropdown(button) {
      var dropdown = button.nextElementSibling;
      dropdown.style.display = dropdown.style.display === 'none' ? 'block' : 'none';
    }
  </script>
</body>
</html> 