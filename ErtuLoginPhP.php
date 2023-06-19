<?php


   if( $_SERVER['REQUEST_METHOD'] === "POST") {
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $host = "localhost";
    $dbname = "ertulogin";
    $username = "root";
    $dbpassword = "";

    $mysqli = new mysqli(hostname: $host,
                        database: $dbname,
                        username: $username,
                        password: $dbpassword);

   /* $sql = "SELECT * FROM `ertu_sign-in` WHERE `name` = ? AND `email` = ? AND `password` = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt -> bind_param("sss",$name, $email, $password);
    $stmt ->execute();

    $affected_rows = $stmt-> affected_rows; 
    /*$result = $mysqli->query($sql);


    if($affected_rows === 1){
        die("Login successful");
    }
    else{
        die("Login failed");
    }
    */
    if ($mysqli->connect_error){
        die('Connection error: ' . $mysqli->connect_error);
    }
    else{
        $stmt = $mysqli->prepare("SELECT * FROM `ertu_sign-in` WHERE `name` = ? AND `email` = ? AND `password` = ?");
        $stmt->bind_param("sss",$name,$email,$password);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            echo "Login successful";
        }
        else{
            echo "Login failed";
        }
        $stmt->close();
        $mysqli -> close();
    }
}

?>

