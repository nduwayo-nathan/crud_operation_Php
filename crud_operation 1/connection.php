<?php

$conn = mysqli_connect("localhost","root",'',"student_db");

if(!$conn){
    echo "connection failed";
}else{
     echo "connected successfully";
}

?>