<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Records</title>
    <style>
        table{
            width: 70%;
            margin: auto;
            font-family: Arial, Helvetica, sans-serif;
        }
        table, tr, th, td{
            border: 1px solid #d4d4d4;
            border-collapse: collapse;
            padding: 12px;
        }
        th, td{
            text-align: left;
            vertical-align: top;
        }
        tr:nth-child(even){
            background-color: #e7e9eb;
        }
    </style>
<body>
      
<?php
   include 'connection.php';
    //Output Form Entries from the Database
    $sql = "SELECT id, fname, lname,email,gender FROM users";
    //fire query

    $result =  $conn->query($sql);
    if(mysqli_num_rows($result) > 0)
    {
       echo '<table> <tr> <th> Id </th> <th> First name </th> <th> Last name </th> <th>Email </th>  <th>Gender</th></tr>';
       while($row = mysqli_fetch_assoc($result)){

        $id=$row["id"];
         // to output mysql data in HTML table format
           echo '
           <tr> 
           <td>' .$id . '</td>
           <td>' . $row["fname"] . '</td>
           <td> ' . $row["lname"] . '</td>
           <td>' . $row["email"] . '</td>
           <td>' . $row["gender"] . '</td> 
          <td> 
          <a href="update.php?id='. $row['id'] .'" class="edit">Edit<span class="fa fa-pencil"></span></a>
          <a href="delete.php?id='. $row['id'] .'" class="delete">Delete<span class="fa fa-pencil"></span></a>
         
          </td>
           </tr>';
       }
       echo '</table>';
    }
    else
    {
        echo "0 results";
    }
    // closing connection
    $conn->close();

?>
</body>
</html>