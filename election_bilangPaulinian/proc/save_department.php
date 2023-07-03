<?php
include ('../server/servers.php');

$dept_code = $_POST['dept_code'];
$dept_title = $_POST['dept_title'];

if(!empty($dept_code) && !empty($dept_title)){

    $sql = "INSERT INTO tbl_departments (dept_code, dept_title) VALUES ('$dept_code','$dept_title');";
     $result  = $conn->query($sql);

     if($result === true){

        $_SESSION['message'] = 'Department Information has been saved!';
        $_SESSION['success'] = 'success';

        header("Location: ../add_department.php");
    }
}



$conn->close();







?>