<?php

include_once 'db.php';

if(isset($_POST['submit']))
{    
    $going = $_POST['going'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $payment = $_POST['payment'];
  

   $sql = "INSERT INTO mountain (`going`, `firstname`, `lastname`, `mobile`, `email`, `gender`, `payment`)
         VALUES ('$going', '$firstname', '$lastname', '$mobile', '$email', '$gender', '$payment')";
         
     if (mysqli_query($conn, $sql)) {
        echo '<script>alert("Congratulations! Your registration record has been added successfully!!!!")</script>';
        echo ("<script>location.href='registration.html'</script>");
     } else {
      echo "Error: " . $sql . ":-" .mysqli_error($conn);
     }
   }

?>


