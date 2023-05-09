<?php
include "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
  // Retrieve the submitted form data
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Validate the submitted credentials against a database of registered users
  if ($email === 'email' && $password === 'password') {
    // Start a session and store the email as a session variable
    session_start();
    $_SESSION['email'] = $email;

    // Redirect to the protected page
    header('Location: display.php');
    exit();
  } else {
    // Redirect back to the login page with an error message
    header('Location: createUser.html');
    exit();
  }
}
?>
