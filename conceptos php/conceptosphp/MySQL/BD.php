<?php
$conn = new mysqli("localhost","root","","adsi");
    if($conn->connect_errno){
        echo "falla alconectarse a Mysql(". $conn->connect_errno.")".
        $conn->connect_error;
    
    } else {
        echo $conn->host_info."<br>";
    };


?>