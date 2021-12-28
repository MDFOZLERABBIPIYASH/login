<?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="test01";

    $conn=mysqli_connect($servername,$username,$password,$database);
    if(!$conn){
        echo "Connecting Failed";
    }
?>