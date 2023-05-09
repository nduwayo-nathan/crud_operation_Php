
<?php
include "connection.php";
//process the login form data
if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $email = $_POST['email'];
  $password = $_POST['password'];
  $result = $conn->query("SELECT * FROM users WHERE email='$email' AND password='$password'");
  $row = mysqli_fetch_assoc($result);
  $hash = $row['password'];
  
  if (!$result){
    echo "Error: ".$conn->error;
    exit();
  }
  
    session_start();

   if( $_SESSION["email"] = $email && password_verify($password, $hash));
    header("Location:display.php");
    exit();
  }
  else{
    echo "Invalid email or password";
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
  <div>
<form method="POST" action="">
        <label for="email">Email:</label>
        <input type="email"  name="email" required><br>
        <label for="password">Password:</label>
        <input type="password"  name="password" required><br>
        <button type="submit">Login</button>
</form>
</div>
</body>
</html>
