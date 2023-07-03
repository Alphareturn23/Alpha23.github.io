<?php
include ('../server/servers.php');
$id = $_GET['id'];

if($id != ''){
    $sql = "DELETE FROM designation WHERE dsn_id='$id'";
    
    $result 	= $conn->query($sql);
    
    if($result === true){
        $_SESSION['message'] = 'Designation has been removed!';
        $_SESSION['success'] = 'danger';
        
    }
}

header('location: ../view_designation.php');
$conn->close();
?>