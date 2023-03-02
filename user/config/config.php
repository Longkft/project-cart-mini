<?php
    $mysqli = new mysqli("localhost", "root", "", "vegetable");

    // check connection
    if($mysqli->connect_errno){
        echo "kết nối mysql lỗi" . $mysqli->connect_errno;
        exit();
    }
?>