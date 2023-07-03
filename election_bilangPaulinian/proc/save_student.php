<?php
include ('../server/servers.php');

$student_id = $_POST['student_id'];
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$dept = $_POST['dept'];
$course= $_POST['course'];
$year = $_POST['yrlevel'];


    
if(!empty($fname) && !empty($lname) && !empty($dept) && !empty($course) && !empty($year)){

        $query = "INSERT INTO students (student_id, fname, lname, dept_id, course, year) VALUES ('$student_id','$fname', '$lname', '$dept', '$course', '$year');";
         $result  = $conn->query($query);

         if($result === true){

            $_SESSION['message'] = 'Student Information has been saved!';
            $_SESSION['success'] = 'success';
            header("Location: ../view_students.php");
           
        } else{
            echo "this page is n";
        }
}
   
	$conn->close();


?>