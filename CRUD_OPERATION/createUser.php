<?php
 include 'connection.php'; 
 if($_SERVER["REQUEST_METHOD"] == "POST"){
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $password =md5($_POST['password']);
    $email = $_POST['email'];
    $gender = $_POST['gender'];
 

    $sql="INSERT INTO users(fname,lname,password,email,gender) VALUES('$first_name','$last_name','$password','$email','$gender')";
    $result = $conn->query($sql);
    
    if($result==true){
        echo 'user registered';
        header("Location:readData.php");
    
    }else{
            echo 'user not inserted';

        }
        $conn->close();
}


?>