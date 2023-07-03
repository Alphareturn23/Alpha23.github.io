<?php
    //session_start();
    include '../server/servers.php';
    include "seer_carlos.php";
    $student_id =  $_POST['student_id'];

    $dept_id = _get_deptid_from_studentid("students", $student_id);
    $_SESSION["dept_id"] = $dept_id;
    $_SESSION["student_id"] = $student_id;
    $_SESSION["voter_course"] = _get_course_from_studentID($student_id, "students");
    if ($_SESSION["dept_id"]=="1") {
        $_SESSION["voter_course"] = _get_sitecourse_from_studentID($student_id, "students");
    }
  
    $_SESSION["voter_year"] = _get_year_from_studentID($student_id, "students");
    $check = "SELECT * FROM votes WHERE student_id= '$student_id'";
    $results = $conn->query($check)->num_rows;
    if ($results == 0) {

        if ($dept_id==1) {
            header('Location: votesite.php');
        } elseif ($dept_id==2) {
            header('Location: votesaste.php');
        } elseif ($dept_id==3) {
            header('Location: votesnahs.php');
           
        } elseif ($dept_id==4) {
            header('Location: votesbahm.php');
            
        }else {
            $_SESSION['message'] = 'Student ID is incorrect!';
            $_SESSION['success'] = 'danger';
            header('Location: index.php');
        } 

        
    }else{
        $_SESSION['message'] = 'Your vote has been cast!';
        $_SESSION['success'] = 'danger';
        header('Location: index.php');
        exit();
    }
    
  
   
?>