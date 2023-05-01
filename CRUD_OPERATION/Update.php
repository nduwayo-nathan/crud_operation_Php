<?php
    include_once('connection.php');

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM users WHERE id = '$id'";
        $result = $conn->query($sql);

        if($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $first_name = $row['fname'];
            $last_name = $row['lname'];
            $password = $row['password'];
            $email = $row['email'];
            $gender = $row['gender'];
          
        }
    }
    if(isset($_POST['submit'])) {
        // get the input values from the form
        $id = $_POST['id'];
        $first_name = $_POST['fname'];
        $last_name = $_POST['lname'];
        $email = $_POST['email'];
    
        // update the record in the database
        $sql = "UPDATE members SET fname='$first_name', lname='$last_name', email='$email' WHERE id='$id'";
    
        if ($conn->query($sql) === TRUE) {
          echo "Record updated successfully";
        } else {
          echo "Error updating record: " . $conn->error;
        }
    
        // close the database connection
        $conn->close();
      }
    ?>
?>

<form method="POST">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <label for="username">First name:</label>
    <input type="text" name="fname" value="<?php echo $first_name; ?>" required><br>

    <label for="last">Last name:</label>
    <input type="text" name="lname" value="<?php echo $last_name; ?>" required><br>

    <label for="password">Password:</label>
    <input type="password" name="password" value="<?php echo $password; ?>" required><br>

    <label for="address">Email:</label>
    <input type="email" name="email" value="<?php echo $email; ?>" required><br>

    <label for="address">Gender:</label>
    <input type="radio" name="gender" value="male" <?php if($gender == 'male') echo 'checked'; ?>>Male<br>
    <input type="radio" name="gender" value="female" <?php if($gender == 'female') echo 'checked'; ?>>Female<br>

   

    <button type="submit" name="edit">Update</button>
</form>
