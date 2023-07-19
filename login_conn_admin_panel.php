
<?php
session_start();

if (isset($_SESSION['username']) && isset($_SESSION['expire_time']) && time() < $_SESSION['expire_time'] ) {
  // User is already logged in, redirect to the new page
  header("Location: admin_panel.php");
  exit();
}


if (isset($_POST['submit'])) {
  // Get the form data
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Perform database query to check if the username and password match
  $query = "SELECT * FROM login_admins WHERE username = '$username' AND password = '$password'";
  $result = mysqli_query($conn, $query);

  if ($result && mysqli_num_rows($result) == 1) {

    $_SESSION['username'] = $username;
    $_SESSION['expire_time'] = time() + (20 * 60); // Set session expiration time to 20 minutes from now
      // Username and password match, redirect to a new page
      header("Location:admin_panel.php");
      exit();
  } else {
      // Invalid username or password
      $error = "invalid username or password";
      // header("Location: admin_login.php");
      
  }
}



?>
