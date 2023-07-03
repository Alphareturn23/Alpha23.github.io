<?php 
include ('../server/servers.php');
$id = $_GET['id'];

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$dept = $_POST['dept'];
$course= $_POST['course'];
$year= $_POST['yrlevel'];


    $sql = "UPDATE students SET fname= '$firstname', lname='$lastname', dept_id='$dept', course='$course', year='$year' where student_id = '$id'";
    $result  = $conn->query($sql);
  
    if($result === true){

       $_SESSION['message'] = 'Students Information has been update!';
       $_SESSION['success'] = 'success';
       header('location: ../view_students.php');
   }


    

    $conn->close();

?>