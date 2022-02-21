<?php

include_once 'db.php';

if(isset($_POST['submit']))
{    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $find = $_POST['find'];
    $going = $_POST['going'];

<<<<<<< HEAD
   $sql = "INSERT INTO `registration`(`id`, `firstname`, `lastname`, `mobile`, `email`, `gender`, `find`, `going`)
         VALUES ('0', '$firstname', '$lastname', '$mobile', '$email', '$gender', '$find', '$going')";
         
=======
   $sql = "INSERT INTO registration (`firstname`, `lastname`, `mobile`, `email`, `gender`, `find`, `going`) VALUES ('$firstname','$lastname','$mobile','$email','$gender','$find','$going')";
>>>>>>> 92e8c563d83c871b81a40da689cc8d80310fd665
     if (mysqli_query($conn, $sql)) {
        echo '<script>alert("New record has been added successfully")</script>';
        echo ("<script>location.href='registration.html'</script>");
     } else {
        echo "Error: " . $sql . ":-" .mysqli_error($conn);
     }
   }

?>


