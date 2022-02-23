<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "events";

    $conn = mysqli_connect($servername,$username,$password,"$dbname");

    if(!$conn){
      die('Could not Connect MySql Server:' .mysqli_error($sql));
        }
        echo "Connected successfully";
?>