<?php
include ('../server/servers.php');
$id = $_GET['id'];


if($id != ''){
    $sql = "DELETE FROM positions WHERE position_id='$id'";
    
    $result 	= $conn->query($sql);
    
    if($result === true){
        $_SESSION['message'] = 'Positions has been removed!';
        $_SESSION['success'] = 'danger';
        
    }
}

header('location: ../view_position.php');
$conn->close();

?>