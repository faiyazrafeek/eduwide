<?php
    require "connection.php";

    if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['age']) && isset($_POST['city'])){

        // check if student already registered
        $sql = "SELECT * FROM students WHERE id = '". $_POST['id'] ."'";

        $result = $con->query($sql);

        if($result->num_rows > 0){
            echo "Already Exists";
        }else{
            $sql = "INSERT INTO students VALUES(?,?,?,?)";
            $stmt = $con->prepare($sql);
            $stmt->bind_param("ssis", $id, $name, $age, $city);

            $id = $_POST['id'];
            $name = $_POST['name'];
            $age = $_POST['age'];
            $city = $_POST['city'];

            $stmt->execute();

            echo "Data Inserted";

            $stmt->close();
        }
       
    }

?>