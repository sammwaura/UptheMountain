<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "register";

$con = new mysqli($host, $username, $password, $db);
if(!$con){
    echo "There are some problems while connecting to the database";
}
// get data from the form
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$find = $_POST['find'];
$going = $_POST['going'];

// insert to database
$query = "INSERT INTO `registration`(`firstname`, `lastname`, `mobile`, `email`, `gender`, `find`, `going`) 
                VALUES ('$firstname', '$lastname', $mobile, '$email', '$gender', '$find', '$going')"
$insert = mysqli_query($con, $query);
if(!$insert) {
    echo "There are some problems while inserting data"
}
else{
    echo "Data inserted";
}

 ?>



