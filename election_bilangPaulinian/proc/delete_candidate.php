<?php
include ('../server/servers.php');

$id = $_GET['id'];

if($id != ''){
    $sql = "DELETE FROM candidates WHERE candidates_id='$id'";
    
    $result 	= $conn->query($sql);
    
    if($result === true){
        $_SESSION['message'] = 'Candidates has been removed!';
        $_SESSION['success'] = 'danger';
        
    }
}

header('location: ../candidates.php');
$conn->close();

?>