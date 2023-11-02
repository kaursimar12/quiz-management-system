<!DOCTYPE html>
<html>
<head>
  <title>Result</title>
  <style>
    body {
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0;
      padding: 0;
    }

    div {
      text-align: center;
    }

    .all{
      display:flex;
      flex-direction:column;
      height:100vh;
      width:100vw;
      background:#DFA290;
    }
    .heading {
      display:flex;
      justify-content:center;
      font-size:50px;
    }

    .table-container {
    display: flex;
    margin: 10px auto;
    width: 800px;
    overflow-y: auto;
    max-height: 600px; 
}

.button-container {
      position: absolute;
      top: 100px;
      right: 100px;
    }

    .button {
      padding: 10px 20px;
      background-color:#43270C ;
      color: white;
      font-size: 20px;
      font-weight:bold;
      border: none;
      cursor: pointer;
      text-decoration: none;
      
    }

    .button:hover {
    background: #8C695F;
    color: black;
  }
    table {
      border-collapse: collapse;
      width: 100%;
    }
    th{
      background:#8C695F;
      color:White;
      font-Weight:bold;
      font-size:40px;
    }
    td{
      background:#FCE9DB;
      font-Weight:bold;
      font-size:20px;
    }
    th, td {
      border: 1px solid black;
      padding: 20px;
      text-align: center;
    }

    thead {
      position: sticky;
      top: 0;
      background-color: white;
    }

    tbody tr:nth-child(even) {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>
  <div class="all">
<div class="button-container">
  <a href="http://localhost/ongc/" class="button">Admin Page</a>
</div>
<div class="heading">
    <h1>RESULT</h1>
</div>
<div class="table-container">


        <div>
    <?php
    $db = 'response';

    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = $db;

    $connection = new mysqli($servername, $username, $password, $dbname);

    // Create the SQL query to get distinct db_names
    $distinctDbQuery = "SELECT DISTINCT db_name FROM responses";
    $distinctDbResult = mysqli_query($connection, $distinctDbQuery);

    // Check if the query was successful
    if ($distinctDbResult) {
        // Fetch the distinct db_names
        while ($dbRow = mysqli_fetch_assoc($distinctDbResult)) {
            $dbName = $dbRow['db_name'];

            // Create the SQL query to fetch data for the specific db_name
            $dataQuery = "SELECT user_id, SUM(CASE WHEN selected_option = correct_option THEN 2 ELSE 0 END) AS marks
                          FROM responses
                          WHERE db_name = '$dbName'
                          GROUP BY user_id";

            // Execute the query
            $dataResult = mysqli_query($connection, $dataQuery);

            // Check if the query was successful and if there are any rows for the current db_name
            if ($dataResult && mysqli_num_rows($dataResult) > 0) {
                // Display the db_name as a heading
                echo "<h2>$dbName</h2>";

                // Start a new table for the current db_name
                echo "<table>";
                echo "<thead>";
                echo "<tr>";
                echo "<th>CFID</th>";
                echo "<th>Marks</th>";
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";

                // Fetch the rows for the current db_name
                while ($row = mysqli_fetch_assoc($dataResult)) {
                    $cfid = $row['user_id'];
                    $marks = $row['marks'];

                    // Display the cfid and marks in a table row
                    echo "<tr>";
                    echo "<td>$cfid</td>";
                    echo "<td>$marks</td>";
                    echo "</tr>";
                }

                // End the table for the current db_name
                echo "</tbody>";
                echo "</table>";
            }
        }

        // Free the result set
        mysqli_free_result($distinctDbResult);
    } else {
        // Query execution failed
        echo "Error executing the query: " . mysqli_error($connection);
    }

    // Close the database connection
    mysqli_close($connection);
    ?>
</div>

</div>
 </div>
</body>
</html>