<?php 

include ('../server/servers.php');

$id = $_GET['id'];

$sql = "INSERT INTO  candidates (candidates_id, picture, student_id, dsn_id, position_id) SELECT id, picture, student_id, dsn_id, position_id FROM tbl_archive WHERE id = '$id';";
$result  = $conn->query($sql);

if ($result === TRUE) {
    $sql = "DELETE FROM tbl_archive WHERE id = '$id';";
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