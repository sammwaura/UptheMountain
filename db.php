<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "register";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
<<<<<<< HEAD
        die('Could not Connect MySql Server:' .mysqli_error($sql));
=======
          die('Could not Connect MySql Server:' .mysql_error());
>>>>>>> 92e8c563d83c871b81a40da689cc8d80310fd665
        }
?>