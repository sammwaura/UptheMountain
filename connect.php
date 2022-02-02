<?php
$firstname = $POST['firstname'];
$lastname = $POST['lasttname'];
$mobile = $POST['mobile'];
$email = $POST['email'];
$gender = $POST['gender'];
$find = $POST['find'];

// Database connection
$conn = new mysqli('localhost', 'root', '', 'test');
if($conn->connect_error){
    die('Connection Failed' : '.$conn->connect_error');
}else{
    $stmt = $conn->prepare("insert into registration(firstname, lastname, mobile, email, gender, find)
    values(?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssisss",$firstname, $lastname ,$mobile, $email, $gender, $find);
    $stmt->execute();
    echo "registration Successfully...";
    $stmt->close();
    $conn->close();
}
?>