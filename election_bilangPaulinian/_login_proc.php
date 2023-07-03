<?php
    session_start();
    include "seer_carlos.php";
    $student_id =  $_POST['student_id'];

    $dept_id = _get_deptid_from_studentid("students", $student_id);
    $_SESSION["dept_id"] = $dept_id;
    header('Location: votespup.php');
?>