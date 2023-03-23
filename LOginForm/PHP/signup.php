<?php
    require "connectDb.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $retype = $_POST["reType"];

        if($password != $retype){
            $match = FALSE;
        }else{
            $match = TRUE;
        }

        if($match == TRUE){
            $sql = "INSERT INTO userData (Username, Email, userPass)
            VALUES ('$username', '$email', '$password');";

            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            }else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            header("Location: main.html");
        }else{
            echo "Password does not match";
        }

        $conn->close();
    }
?>