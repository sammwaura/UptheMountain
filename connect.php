<?php
$firstname = $POST['firstname'];
$lastname = $POST['lasttname'];
$mobile = $POST['mobile'];
$email = $POST['email'];
$gender = $POST['gender'];
$find = $POST['find'];

// Database connection
if (!empty($firstname) || !empty($lastname) || !empty($mobile || !empty($email) 
|| !empty($gender) || !empty($find)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "register";

    // create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

    if(mysqli_connect_error){
        die('Connect Error('.mysqli_connect_error().')'. mysqli_connect_error());
    }else{
        $SELECT = "SELECT email from register Where email = ? Limit 1";
        $INSERT = "INSERT Into register (firstname, lastname, mobile, email, gender, find) values(?, ?, ?, ?, ?, ?)";
    // prepare statement
                $stmt = $conn->prepare($SELECT);
                $stmt->bind_param("s",$email);
                $stmt->execute();
                $stmt->bind_result($email);
                $stmt->store_result();
                $rnum = $stmt->num_rows;

                if($rnum==0){
                    $stmt->close();

                    $stmt = $conn->prepare($INSERT);
                    $stmt->bind_param("ssisss", $firstname, $lastname, $mobile, $email, $gender, $find);
                    $stmt->execute();
                    echo "New record inserted successfully";
                } else {
                    echo "Someone already registered using this email";
                }
            $stmt->close();
            $conn->close();
        }
    } else {
        echo "All fields are required";
        die();
}
?>