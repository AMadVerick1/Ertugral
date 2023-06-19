<?php
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$date = $_POST["date"];
$time = $_POST["time"];
$selectOption = $_POST["selectOption"];

$host = "localhost";
$dbname = "ertubooking";
$username = "root";
$dbpassword = "";

$mysqli = new mysqli(hostname: $host, database: $dbname, username: $username, password: $dbpassword);

if ($mysqli->connect_error){
    die('Connection error: ' . $mysqli->connect_error);
}
else{
    $stmt = $mysqli->prepare("INSERT INTO `bookinfo` ( `name`, `email`, `phone`, `date`, `time`, `select`) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $name, $email, $phone, $date, $time, $selectOption);
    $stmt->execute();
    
    echo "Booking info added!";
    
    $stmt->close();
    $mysqli->close();
}

?>