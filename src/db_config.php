<?php
    $host = 'localhost';
    $db   = 'rangwad';
    $user = 'root';
    $pass = 'p@ssw0rd';
    $conn = new mysqli($host, $user, $pass, $db);
    
    if ($conn->connect_error) {
        echo ("Connect DB Fail")
        die("เชื่อมต่อฐานข้อมูลล้มเหลว: " . $conn->connect_error);
    }else{
        echo ("Sucess")
    }
    ?>