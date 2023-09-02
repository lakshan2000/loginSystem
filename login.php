<?php
    session_start();

    include_once "dbconect.php";

    $username = $_POST['username'];
    $password = $_POST['password'];


    $sql = "SELECT * FROM users WHERE User_Name = '$username';";
    $result = mysqli_query($connect , $sql);
    $check = mysqli_num_rows($result);

    

    if( !$check > 0){
        echo "<p style='color:red;background-color:rgb(179, 56, 56, 0.3);font-size:17px;padding:2px'> User Name doesn't exist,Try Again!!!</p>";
            require "login.html";
    }else{
        $_SESSION['username'] = $username;

        $row = mysqli_fetch_assoc($result);

        if($row['Passwrd'] !== $password){
            echo "<p style='color:red;background-color:rgb(179, 56, 56, 0.3);font-size:17px;padding:2px'> Pasword is incorect,Try Again!!!</p>";
            require "login.html";
        }else{

            header("Location: user.php ? signup = success");
            $_SESSION['firstname'] = $row['First_Name'];            
            $_SESSION['lastname'] = $row['Last_Name'];  
        }          
        
    }

?>