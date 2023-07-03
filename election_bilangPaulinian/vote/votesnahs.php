<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilang Paulinian</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script src="assets/jquery/jquery.min.js"></script>
    <script src="assets/jquery/jquery.slim.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <style>
        .checkbox-larger {
        transform: scale(2);
        margin: 20px;
        }
    </style>
</head>

<body>
<div class="d-flex justify-content-center">
<img class="img-fluid" style="max-width:450px; margin-top:30px;" alt="" src="assets/img/bilang_2.png">
</div>
<div class="container">
<form method="post" action="reviewvotes.php">
    <br>

    <!-- let's create table to divide our panels -->
    <table>
    
    <!-- first row -->
    <tr><td>
    <div class="card border-default col-lg-12" style="margin-right:300px;padding: 0 0; margin-bottom:20px; margin-left:30px;">
        <div class="card-header border-default" style="background-color:#036635;margin:0px;">
              <b style="color:#fff;">PSG UNIWIDE</b>
        </div>
        <div class="card-body" style="background-color:#F2F3F4;">
            <!-- -->
                <?php
                session_start();
                include "seer_carlos.php";
                $votes = array();
                $getUniwidePositions = get_where_custom("positions", "dsn_id", "1");
                foreach ($getUniwidePositions as $key => $rowUniwidePositions) {
                    $uniwidePosition_id = $rowUniwidePositions['position_id'];
                    $uniwidePositionTitle = $rowUniwidePositions['position_title'];
                ?>
                <h5 class="card-title"><?= $uniwidePositionTitle ?></h5>
                <?php
                    //$getCandidatesFromPositionID = get_where_custom("candidates", "position_id", $uniwidePosition_id);
                    if ($uniwidePosition_id=="7") {
                        $voter_dept_id = $_SESSION["dept_id"];
                        $custom_query = "SELECT candidates.candidates_id, candidates.student_id, candidates.position_id, students.fname, students.lname, students.dept_id
                        FROM candidates
                        INNER JOIN students ON candidates.student_id=students.student_id
                        WHERE candidates.position_id='$uniwidePosition_id'
                        AND students.dept_id='$voter_dept_id'
                        ORDER BY students.fname";       
                    } else {
                        $custom_query = "SELECT candidates.candidates_id, candidates.student_id, candidates.position_id, students.fname, students.lname
                        FROM candidates
                        INNER JOIN students ON candidates.student_id=students.student_id
                        WHERE candidates.position_id='$uniwidePosition_id'
                        ORDER BY students.fname";       
                    }
                    $getCandidatesFromPositionID = custom_query($custom_query);
                    foreach ($getCandidatesFromPositionID as $key => $rowCandidates) {
                        $uniwideCandidateID = $rowCandidates['candidates_id'];
                        $uniwideCandidateStudentID = $rowCandidates['student_id'];
                        $candidate_name = _get_fullname_from_studentID($uniwideCandidateStudentID, "students");
                        $candidate_photo = _get_photo_from_candidateID($uniwideCandidateID, "candidates");
                        //$_SESSION['x'.$uniwidePosition_id.$uniwideCandidateID] = "p_".$uniwidePosition_id."c_".$uniwideCandidateID;
                        //$_SESSION["student_id"] = $uniwideCandidateStudentID;

                        $checked_value = "cc_".$uniwidePosition_id."-".$uniwideCandidateID;
                        if (isset($_SESSION[$checked_value])) {
                            $checked_final_value = $_SESSION[$checked_value];
                        } else {
                            $checked_final_value = "";
                        }
                        array_push($votes, $uniwidePosition_id."-".$uniwideCandidateID);
                        $course_yr = _get_course_from_studentID($uniwideCandidateStudentID, "students")."-"._get_year_from_studentID($uniwideCandidateStudentID, "students");
                        ?>
                        <div class="card mb-3" style="max-width: 1000%;">
                            <table cellpadding="10" border="0">
                                <tr>
                                    <td style="width:5%;">
                                    
                                    <input type="checkbox" class="checkbox-larger" name="c_<?= $uniwidePosition_id."-".$uniwideCandidateID ?>" <?= $checked_final_value ?>>
                                    </td>
                                    <td style="width:15%;">
                                        <img src="<?= $candidate_photo ?>" style="width:100%;" class="rounded-circle" >
                                    </td>
                                    <td>
                                    <b><?= $candidate_name ?></b><br>
                                    <?= $course_yr ?>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        
                        <br><br>
                        <?php
                    } 
                    // end foreach getCandidatesFromPositionID
                ?>
                
                <?php
                } // end foreach getUniwidePositions
                
                 ?>
            </div>
        </div>
        <!-- -->
    
        
    <div class="card border-default col-lg-12" style="padding: 0 0; margin-left:30px; ">
        <div class="card-header border-default" style="background-color:#036635;margin:0px;">
              <b style="color:#fff;">PSG SNAHS</b>
        </div>
        <div class="card-body" style="background-color:#F2F3F4;">
            <?php
            $getSchoolwidePositions = get_where_custom("positions", "dsn_id", "4");
            foreach ($getSchoolwidePositions as $key => $rowSchoolwidePositions) {
                $schoolwidePosition_id = $rowSchoolwidePositions['position_id'];
                $schoolwidePositionTitle = $rowSchoolwidePositions['position_title'];
            ?>

            <?php
                if  ( ($schoolwidePosition_id>=40) && ($schoolwidePosition_id<=42) ) {
                    $voter_dept_id = $_SESSION["dept_id"];
                    $voter_course = $_SESSION["voter_course"];
                    $voter_year = $_SESSION["voter_year"];
                    $custom_query = "SELECT candidates.candidates_id, candidates.student_id, candidates.position_id, students.fname, students.lname, students.dept_id, students.year
                    FROM candidates
                    INNER JOIN students ON candidates.student_id=students.student_id
                    WHERE candidates.position_id='$schoolwidePosition_id'
                    AND students.dept_id='$voter_dept_id'
                    AND students.year='$voter_year'
                    ORDER BY students.fname";       
                }      
                else {
                    $custom_query = "SELECT candidates.candidates_id, candidates.student_id, candidates.position_id, students.fname, students.lname
                    FROM candidates
                    INNER JOIN students ON candidates.student_id=students.student_id
                    WHERE candidates.position_id='$schoolwidePosition_id'
                    ORDER BY students.fname";       
                }

                $count_siterows = count_deptrows($custom_query);
                if ($count_siterows!=0) {
                ?>
                <h5 class="card-title"><?= $schoolwidePositionTitle ?></h5>
                <?php
                }
                $getCandidatesFromPositionID = custom_query($custom_query);
                foreach ($getCandidatesFromPositionID as $key => $rowCandidates) {
                    $schoolwideCandidateID = $rowCandidates['candidates_id'];
                    $schoolwideCandidateStudentID = $rowCandidates['student_id'];
                    $candidate_name = _get_fullname_from_studentID($schoolwideCandidateStudentID, "students");
                    $candidate_photo = _get_photo_from_candidateID($schoolwideCandidateID, "candidates");

                    $checked_value = "cc_".$schoolwidePosition_id."-".$schoolwideCandidateID;
                    if (isset($_SESSION[$checked_value])) {
                        $checked_final_value = $_SESSION[$checked_value];
                    } else {
                        $checked_final_value = "";
                    }
                    array_push($votes, $schoolwidePosition_id."-".$schoolwideCandidateID);
                    $course_yr = _get_course_from_studentID($schoolwideCandidateStudentID, "students")."-"._get_year_from_studentID($schoolwideCandidateStudentID, "students");
                    ?>
                    <div class="card mb-3" style="max-width: 1000%;">
                        <table cellpadding="5" border="0">
                            <tr>
                                <td style="width:5%;">
                                
                                <input type="checkbox" class="checkbox-larger" name="c_<?= $schoolwidePosition_id."-".$schoolwideCandidateID ?>" <?= $checked_final_value ?>>
                                </td>
                                <td style="width:15%;">
                                    <img src="<?= $candidate_photo ?>" style="width:100%;" class="rounded-circle" >
                                </td>
                                <td>
                                <b><?= $candidate_name ?></b><br>
                                <?= $course_yr ?>
                                </td>
                            </tr>
                        </table>
                    </div>
                    
                    <br><br>
                    <?php
                } 
                // end foreach getSchoolwideFromPositionID
            ?>
            
            <?php
            } // end foreach getSchoolwidePositions
            
            $_SESSION['votes'] = $votes;
            $_SESSION['total_sessions'] = count($votes);
            ?>
        </div>
    </div>
    </td></tr>
    <!-- end first row -->
    
    <!-- second row -->
    <tr><td>
    <br>
    <button type="submit" style="margin-left:30px;" class="btn btn-primary btn-lg col-sm-12"><h3>SUBMIT VOTES</h3></button>  

    </td></tr>
    <!-- end second row -->
    </table>
    <br><br><br><br><br><br>
</form>
</div>

<?php include ('../layouts/scripts.php'); ?>
</body>
</html>
