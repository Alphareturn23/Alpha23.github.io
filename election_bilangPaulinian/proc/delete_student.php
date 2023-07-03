<?php
include ('../server/servers.php');
$id = $_GET['id'];

if($id != ''){
    $query = "DELETE FROM students WHERE student_id='$id'";
    
    $result 	= $conn->query($query);
    
    if($result === true){
        $_SESSION['message'] = 'Students has been removed!';
        $_SESSION['success'] = 'danger';
        
    }
}

header('location: ../view_students.php');
$conn->close();

?>