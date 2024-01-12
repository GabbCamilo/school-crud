<?php
    $id = $_POST['id'];
    require_once 'index.php';

    $sql = ("SELECT * FROM student WHERE id = '$id'") or die(mysqli_error($connect));
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
        $info = $result->fetch_assoc();
        $info = $info['attribute'];    

        $sql = "UPDATE student SET info='$info',... WHERE id={$id}";

        if ($connect->query($sql)) {
            echo 'Successfully changed';
        } else {
            echo "Change error: $sql";
            echo "MySQL error: $connect->connect_error";
        }

        $select = "SELECT * FROM aluno";

    $connect->close();
    }

?>