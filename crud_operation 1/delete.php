<?php 

include "connection.php"; 

if (isset($_GET['id'])) {

    $user_id = $_GET['id'];

    $sql = "DELETE FROM `users` WHERE `id`='$user_id'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        header('Location: display.php');

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>

