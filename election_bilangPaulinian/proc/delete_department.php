<?php
include ('../server/servers.php');
$id = $_GET['id'];


if($id != ''){
    $sql = "DELETE FROM departments WHERE dept_id='$id'";
    
    $result 	= $conn->query($sql);
    
    if($result === true){
        $_SESSION['message'] = 'Department has been removed!';
        $_SESSION['success'] = 'danger';
        
    }
}

header('location: ../view_department.php');
$conn->close();


?>