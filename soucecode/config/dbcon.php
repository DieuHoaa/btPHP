<?php
    $servername = "localhost: 127.0.0.1:3308";
    $username = "root";
    $password = "";
    $dbname = "cnltw";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    mysqli_set_charset($conn,'utf8');
    //check database
    if(!$conn)
    {
        die("Connection Faild ". mysqli_connect_errno());
        echo "Something Wrong";
    }
?>