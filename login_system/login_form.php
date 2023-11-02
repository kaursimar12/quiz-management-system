<?php

@include 'config.php';

$conn2 = mysqli_connect('localhost', 'root', '', 'hostdb');
$query = "SELECT dbname FROM table1";
$result = $conn2->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_array();
    $columnValue = $row[0];  // Access the column value using the index
    $hdb = $columnValue;
} else {
    echo "No rows found.";
}
$result->close();
$conn2->close();

$conn1 = mysqli_connect('localhost', 'root', '', 'response');
if (!$conn1 ) {
   die("Connection failed: " . mysqli_connect_error());
}

session_start();

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $cfid = mysqli_real_escape_string($conn, $_POST['cfid']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];


   $checkResponseQuery = "SELECT * FROM response.responses WHERE user_id = '$cfid' AND db_name = '$hdb';";
   $checkResponseResult = mysqli_query($conn, $checkResponseQuery);

   $select = " SELECT * FROM user_form WHERE cfid = '$cfid' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0 && mysqli_num_rows($checkResponseResult) <= 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         $_SESSION['cfid'] = $row['cfid'];
         header('location:admin_page.php');
         
      }elseif($row['user_type'] == 'user'){
         
         $_SESSION['user_name'] = $row['name'];
         $_SESSION['cfid'] = $row['cfid'];
         header('location:user_page.php');

      }
     
   }else{
      if(mysqli_num_rows($result) <= 0){
         $error[] = 'incorrect cfid or password!';
         echo "<script>
         alert('Incorrect cfid or password!!!');
         window.location.replace('http://localhost/login_system/login_form.php');
         </script>";
         exit(); // Stop further execution
      }
      if (mysqli_num_rows($checkResponseResult) > 0) {
         // User has already responded
         echo "<script>
         alert('You have already responded!!!');
         window.location.replace('http://localhost/login_system/login_form.php');
         </script>";
         exit(); // Stop further execution
      }
   }

};

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="\login_system\style.css">
   <style>
   .logo {
   position: absolute;
   top: 15px;
   left: 50%;
   transform: translateX(-50%);
 }
 .logo img {
   height: 150px;
   width: 150px; 
 }
</style>

</head>
<body>

<header>
  </header>
   
<div class="form-container">
<div class="logo">
<img
src="\login_system\logo.png" alt="logo" />
    </div>
   <form action="" method="post">
      <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="number" name="cfid" required placeholder="enter your cfid">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>don't have an account? <a href="register_form.php">register now</a></p>
   </form>

</div>


</body>
</html>