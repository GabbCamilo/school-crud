<?php
$id = $_POST['id'];
require_once 'index.php';

$sql = "DELETE FROM student WHERE id ='$id'";

    if ($connect->query($sql)){
        echo "Successfully deleted";
    }
    else{
        echo "Delete error: $sql";
        echo "MySQL error: $connect->connect_error";
    }
    $connect->close();
?>