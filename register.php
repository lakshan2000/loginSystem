<?php
    include_once "dbconect.php";
    
    $fName = $_POST['FirstName'];
    $lName = $_POST['LastName'];
    $UName = $_POST['UserName'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    $cpassword =$_POST['confirmpassword'];

    if($password != $cpassword){
        echo "<p style='color:red;background-color:rgb(179, 56, 56, 0.3);font-size:17px;padding:2px'> Paswords are doesn't match,Try Again!!!</p>";
        require "register.html";
    }else{
        $sql = "INSERT INTO users (First_Name,Last_Name,User_Name,Email,Passwrd) Values ('$fName','$lName','$UName','$email','$password');";
        
        $result = mysqli_query($connect, $sql);
        echo "<p style='color:green;background-color:rgb(44, 185, 16, 0.5);font-size:17px;padding:2px'> Register Sccefull!!!</p>";
        require "login.html";
    }
?>