<?php
    include "connection.php";

    if(isset($_POST['id']) && isset($_POST['del'])){
        $sql = "DELETE FROM students WHERE id = '". $_POST['id'] ."'" ;

        if($con->query($sql)){
            echo "del";
        }else{
            echo "nodel";
        }
    }

    $con->close();

?>


