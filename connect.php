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

   $sql = "INSERT INTO `registration`(`firstname`, `lastname`, `mobile`, `email`, `gender`, `find`, `going`)
                values ($firstname', '$lastname', $mobile, '$email', '$gender', '$find', '$going')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}

?>


