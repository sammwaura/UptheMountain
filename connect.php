<?php

$firstname = filter_input(INPUT_POST, 'firstname');
$lastname = filter_input(INPUT_POST, 'lastname');
$mobile = filter_input(INPUT_POST, 'mobile');
$email = filter_input(INPUT_POST, 'email');
$gender = filter_input(INPUT_POST, 'gender');
$find = filter_input(INPUT_POST, 'find');
$going = filter_input(INPUT_POST, 'going');

if(!empty($firstname)){
    if(!empty($lastname)){
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "register";
        // create connection
        $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

        if(mysqli_connect_error()){
            die('Connect Error ('. mysqli_connect_errno() .') '
            . mysqli_connect_error());
        }
        else{
            $sql = "INSERT INTO registration (firstname, lastname, mobile, email, gender, find, going) 
            values ('$firstname', '$lastname', $mobile, '$email', '$gender', '$find', '$going')";
            if($conn->query($sql)){
                echo "New record is inserted successfully";
            }
            else{
                echo "Error: ". $sql ."<br>". $conn->error;
            }
            $conn->close();
        }

    }else{
        echo "Lastname should not be empty";
        die();
    }

}
else{
    echo "Firstname should not be empty";
    die();
}
?>


