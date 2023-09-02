<?php
    session_start();

    $dbServerName = "localhost";
    $dbUserName ="root";
    $dbPassword = "";
    $dbName = "database_01";

    $connect = mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbName );

?>