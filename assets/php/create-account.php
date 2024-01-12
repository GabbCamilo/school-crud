<?php
    require_once "index.php";

    if ($_POST) {
        $info = $_POST['info'];

        $sql = "INSERT INTO teacher (attributes,...) VALUES ( '$info',...)";
            if ($connect->query($sql)) {
                echo 'Successfully Registered<br>';
            } 
            else {
                echo "Registration error: $sql";
                echo "MySQL error: $connect->connect_error";
            }
    }
    $connect->close();
?>