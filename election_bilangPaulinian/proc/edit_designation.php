<?php 
include ('../server/servers.php');

$id = $_GET['id'];
$desc = $_POST['desc'];
$dept = $_POST['dept'];

if(!empty($id)){

    if(!empty($desc)){

        $sql = "UPDATE designation SET dept_id='$dept', description = '$desc' where dsn_id = '$id'";
        $result  = $conn->query($sql);
    
        if($result === true){
    
           $_SESSION['message'] = 'Designation Information has been update!';
           $_SESSION['success'] = 'success';
           header('location: ../view_designation.php');
           
       }
    }
}





?>