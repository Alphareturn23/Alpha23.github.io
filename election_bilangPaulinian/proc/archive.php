<?php 

include ('../server/servers.php');



    $id = $_GET['id'];

    $sql = "INSERT INTO  tbl_archive (id, picture, student_id, dsn_id, position_id) SELECT candidates_id, picture, student_id, dsn_id, position_id FROM candidates WHERE candidates_id = '$id';";
    $result  = $conn->query($sql);

    if ($result === TRUE) {
        $sql = "DELETE FROM candidates WHERE candidates_id = '$id';";
        $result  = $conn->query($sql);
        if ($result === TRUE) {
            header("Location: ../candidates.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }




?>