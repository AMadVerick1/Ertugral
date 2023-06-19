<?php

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$passwordConfirmation = $_POST['passwordConfirmation'];

$host = "localhost";
$dbname = "ertulogin";
$username = "root";
$dbpassword = "";

$mysqli = new mysqli(hostname: $host,
                     database: $dbname,
                     username: $username,
                     password: $dbpassword);

//$conn = new mysqli('localhost','root','','ertulogin');

    if ($mysqli->connect_error){
        die('Connection error: ' . $mysqli->connect_error);
    }
    else{
        $stmt = $mysqli->prepare("INSERT INTO `ertu_sign-in`( `name`, `email`, `password`, `passwordConfirmation`) VALUES (?,?,?,?)");
        $stmt->bind_param("ssss",$name,$email,$password,$passwordConfirmation);
        $stmt->execute();
        echo "registration successfull";
        $stmt->close();
        $mysqli -> close();
    }

?>