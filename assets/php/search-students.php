<?php
    require_once "index.php";

        $sql = mysqli_query($connect, "SELECT * FROM student") or die(mysqli_error($connect));

        while ($row = mysqli_fetch_assoc($sql)) {
            echo 
                "<tr>
                <td>" . $row['attributes'] . "</td>
                </tr>";
        }
?>