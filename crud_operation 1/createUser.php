<?php 


include 'connection.php'; 
if($_SERVER["REQUEST_METHOD"] == "POST"){
   $first_name = $_POST['fname'];
   $last_name = $_POST['lname'];
   $email = $_POST['email'];
   $password =md5($_POST['password']);
   $gender = $_POST['gender'];


   $sql="INSERT INTO users(fname,lname,email,password,gender) VALUES('$first_name','$last_name','$email','$password','$gender')";
   $result = $conn->query($sql);
   
   if($result==true){
       echo 'user registered';
       header("Location:display.php");
   
   }else{
           echo 'user not inserted';

       }
       $conn->close();
}
?>

<!DOCTYPE html>

<html>

<body>

<h2>Signup Form</h2>

<form action="" method="POST">

  <fieldset>

    <legend>Personal information:</legend>

    First name:<br>

    <input type="text" name="fname">

    <br>

    Last name:<br>

    <input type="text" name="lname">

    <br>

    Email:<br>

    <input type="email" name="email">

    <br>

    Password:<br>

    <input type="password" name="password">

    <br>

    Gender:<br>

    <input type="radio" name="gender" value="Male">Male

    <input type="radio" name="gender" value="Female">Female

    <br><br>

    <input type="submit" name="submit" value="submit">

  </fieldset>

</form>

</body>

</html>