<?php

// php code to Update data from mysql database Table

if(isset($_POST['update']))
{
   $connect = mysqli_connect("localhost", "root", "Appu196!", "EMP");
   
   // get values form input text and number
   
   $id = $_POST['id'];
   $firstname = $_POST['firstname'];
   $lastname = $_POST['lastname'];
   $email = $_POST['email'];
           
   // mysql query to Update data
   $query = "UPDATE employees SET firstname='".$firstname."',lastname='".$lastname."' WHERE id = $id";
   
   $result = mysqli_query($connect, $query);
   
   if($result)
   {
       echo 'Data Updated';
   }else{
       echo 'Data Not Updated';
   }
   mysqli_close($connect);
}

?>

<!DOCTYPE html>

<html>

    <head>

        <title> UPDATE DATA </title>
    </head>

    <body>

        <form action="employee_data_update.php" method="post">

            ID To Update: <input type="text" name="id" required><br><br>

            New First Name:<input type="text" name="firstname" required><br><br>

            New Last Name:<input type="text" name="lastname" required><br><br>

            New Email:<input type="email" name="email" required><br><br>

            <input type="submit" name="update" value="Update Data">

        </form>
<br><a href='welcome.php'><input type=button name=back value=back><br></a>
<br><a href='logout.php'><input type=button value=logout name=logout></a>
    </body>


</html>