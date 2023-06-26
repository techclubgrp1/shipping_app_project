<?php

    
// Check if the form has been submitted
    if(isset($_POST['submitButton'])) {
    // Get the username and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
  
    // Check if the passwords match
    if ($password !== $confirm_password) {
        $error= "Passwords do not match";
      
    } else {
      // Check if the username is already taken
      $sql = "SELECT username FROM login WHERE username='$username'";
      $result = $conn->query($sql);
  
      if ($result->num_rows > 0) {
        $error = "Username is already taken";
        
      } 
      else {
        // Insert the user's information into the database
        $insertData=mysqli_query($conn, "INSERT INTO login (username, password) VALUES ('$username', '$password')");
        if ($insertData)
         {
          $response = "User created successfully";
        } 
        else{
            $error = "not created";
        }
      }
    }
  }
  ?>

