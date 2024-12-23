<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
  include 'connect.php';
  $name =  $_REQUEST['name'];
  $age = $_REQUEST['age'];
  $gender =  $_REQUEST['gender'];
  $email = $_REQUEST['email'];
  $phone = $_REQUEST['phone'];
  $other = $_REQUEST['other'];
   
  
  $sql = "INSERT INTO travelform  VALUES ('$name', 
      '$age','$gender','$email','$phone','$other')";
   
  if(mysqli_query($con, $sql)){
     // echo "<h3>data stored successfully.";

  } else{
      echo "ERROR: Hush! Sorry $sql. "
          . mysqli_error($con);
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bm" src="bm.jpg" alt="CGC Landran">
    <div class="container">
        <h1>Welcome to CGC Landran Shimla Trip form</h3>
        <p>Enter your details and submit this form to confirm your participation in the trip</p>
        <?php
        
    ?>

        <form action="index.php" method="post">
           <input type="text" name="name" id="name" placeholder="Enter your name">
           <input type="text" name="age" id="age" placeholder="Enter your age">
           <input type="text" name="gender" id="gender" placeholder="Enter your gender">
           <input type="email" name="email" id="email" placeholder="Enter your email">
           <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
           <textarea name="other" id="other" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
           <button class="btn">Submit</button>
    
    

        </form>
    </div>
    
    
    
</body>
</html>
