<?php 

include "connection.php";

$sql = "SELECT * FROM users";

$result = $conn->query($sql);

?>

<!DOCTYPE html>

<html>

<head>

    <title>View Page</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<style>
    .container{
        width:100%;
        gap:2rem;
        font-size:2rem;
        background-color:gray;
        display: flex;
        flex-direction:row;
        color:white;
    }
    .container>a{
        left:800px;
        height:6rem;
        padding: 1rem;
        position: relative;
        width:20rem;
        border:2px solid orange;
        background-color:green;
        color:white;
    }
    .container>h1{
        position: relative;
    align-self:flex-start;
    }
</style>

</head>


<body><div class="main">

    <div class="container">
        <h1 >users</h1>
        <a href="generate Pdf.php" >PRINT PDF</a>
        <a href="createUser.php" >Create a new user</a>
    </div>

<table class="table">

    <thead>

        <tr>

        <th>ID</th>

        <th>First Name</th>

        <th>Last Name</th>

        <th>Email</th>

        <th>Gender</th>

        <th>Action</th>

    </tr>

    </thead>

    <tbody> 

        <?php

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

        ?>

                    <tr>

                    <td><?php echo $row['id']; ?></td>

                    <td><?php echo $row['fname']; ?></td>

                    <td><?php echo $row['lname']; ?></td>

                    <td><?php echo $row['email']; ?></td>

                    <td><?php echo $row['gender']; ?></td>

                    <td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>

                    </tr>                       

        <?php       }

            }

        ?>                

    </tbody>

</table>

    </div> 

</body>

</html>