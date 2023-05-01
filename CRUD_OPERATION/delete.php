<?php
include_once 'connection.php';
$sql = "DELETE FROM users WHERE id='" . $_GET['id'] . "'";
$result =$conn->query($sql);
if ($result==true) {
    header("Location:readData.php");
    // echo "deleted";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>