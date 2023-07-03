<?php
$database	= "bilangpaulinian";
$servername	= "localhost";
$username	= "root";
$password	= "";

ini_set('display_errors',1);
error_reporting(E_ALL);
mysqli_report(MYSQLI_REPORT_ERROR | E_DEPRECATED | E_STRICT);
// error_reporting(0);

$conn = new mysqli($servername,$username,$password,$database);

if($conn->connect_error){
	die("Connection Failed: ". $conn->connect_error);
}

if(!isset($_SESSION)){
	session_start();	
}


$student_id = strtoupper($_POST['student_id']);
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$dept = $_POST['dept'];
$course= $_POST['course'];
if ($course=='BSIT') {
    $site_course = "BSIT";
} else {
    $site_course = "ENGR";
}
$yrlevel = $_POST['yrlevel'];


$check = "SELECT * FROM students WHERE student_id= '$student_id'";
$id = $conn->query($check)->num_rows;

if($id == 0){
    
    if(!empty($fname) && !empty($lname) && !empty($dept) && !empty($course) && !empty($yrlevel)){

        $query = "INSERT INTO students (student_id, fname, lname, dept_id, course,site_course,year) 
        VALUES ('$student_id','$fname', '$lname', '$dept','$course','$site_course','$yrlevel');";
         $result  = $conn->query($query);

         if($result === true){
            header("Location: register_success.php");
        }
    }else{
        $_SESSION['message'] = 'Please fill up the form completely!';
        $_SESSION['success'] = 'danger';
    }

}else{
    $_SESSION['message'] = 'Student ID already exist. Please try again.';
    $_SESSION['success'] = 'danger';
    header("Location: register.php");
}




	$conn->close();


?>