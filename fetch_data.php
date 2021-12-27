<?php
    include "connection.php";

    if(isset($_GET['fetchall'])){
        $sql = "SELECT * FROM students order by id";

        $result = $con->query($sql);
        $tableText = "";
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
            $tableText .= "<tr><td>". $row['id'] . "</td>";
            $tableText .= "<td>". $row['name'] . "</td>";
            $tableText .= "<td>". $row['age'] . "</td>";
            $tableText .= "<td>". $row['city'] . "</td>";
            $tableText .= "<td><input type='button' class='btn btn-sm btn-success' onclick='loadData(\"". $row['id'] ."\");' value='Update'>&nbsp;";
            $tableText .= "<input type='button' class='btn btn-sm btn-danger' onclick='delete_row(\"". $row['id'] ."\");' value='Delete'></td></tr>";
            }
        }
        echo $tableText;
    }

    if(isset($_GET['id']) && isset($_GET['load'])){
        $data = [];
        $sql = "SELECT * FROM students  where id = '". $_GET['id'] ."'";
        $result = $con->query($sql);
        
        

        echo "".json_encode($result->fetch_assoc());
    }

    $con->close();

?>


