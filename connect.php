<?php

include_once 'db.php';

if(isset($_POST['submit']))
{    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $payment = $_POST['payment'];


   $sql = "INSERT INTO mountain (`Id`, `firstname`, `lastname`, `mobile`, `email`, `gender`, `payment`)
         VALUES ('0', '$firstname', '$lastname', '$mobile', '$email', '$gender', '$payment')";
         
     if (mysqli_query($conn, $sql)) {
        echo '<script>alert("New record has been added successfully")</script>';
        echo ("<script>location.href='registration.html'</script>");
     } else {
      echo "Error: " . $sql . ":-" .mysqli_error($conn);
     }
   }

?>


