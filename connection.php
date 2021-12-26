<?php
    $servername = "sql6.freemysqlhosting.net";
    $username = "sql6461273";
    $password = "hySH18jsMK";
    $db = "sql6461273";

    $con = new mysqli($servername, $username, $password, $db);

    if($con->connect_errno){
        echo "Error connecting DB - " . $con->connect_error;
    }
?>