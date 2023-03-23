<?php
    require "connectDb.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = "SELECT userPass FROM userData WHERE Username = '$username' OR Email = '$username';";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                if($password === $row["userPass"]){
                    $correctPass = TRUE;
                }else{
                    $correctPass = FALSE;
                }
            }
        }else{
            $correctPass = FALSE;
        }

        if(!$correctPass){
            echo "Username or password is incorrect.";
        }else{
            header("Location: ../main.html");
        }

        $conn->close();
    }
?>