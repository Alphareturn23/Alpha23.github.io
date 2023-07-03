<?php 
include ('../server/servers.php');

$id = $_GET['id'];

$dept_code = $_POST['dept_code'];
$dept_title = $_POST['dept_title'];


if(!empty($id)){

    if(!empty($dept_code) && !empty($dept_title)){

        $sql = "UPDATE `departments` SET `dept_code`='$dept_code',`dept_title`='$dept_title' WHERE dept_id = '$id'";
        $result  = $conn->query($sql);
    
        if($result === true){
    
           $_SESSION['message'] = 'Department Information has been update!';
           $_SESSION['success'] = 'success';
          
        }
    }
}
header('location: ../view_department.php');

?>