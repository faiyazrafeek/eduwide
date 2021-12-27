<?php
    include "connection.php";

    if( isset($_GET['update']) && isset($_GET['id']) && isset($_GET['name']) && isset($_GET['age']) && isset($_GET['city'])){
        $id = $_GET['id'];
        $name = $_GET['name'];
        $age = $_GET['age'];
        $city = $_GET['city'];

        $sql = "UPDATE students SET name = '$name', age = '$age', city = '$city' where id = '$id' ";

        $result = $con->query($sql);
        echo "updated";        
    }

    $con->close();

?>


