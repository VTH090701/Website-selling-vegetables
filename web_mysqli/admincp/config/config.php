<?php
    $mysqli = new mysqli("localhost","root","","webrau1");

    if($mysqli->connect_errno ){
        echo "Kết nối thất bại" . $mysqli->connect_errno ;
        exit();
    }
    
?>