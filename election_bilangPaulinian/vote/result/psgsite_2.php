<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilang Paulinian</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="../assets/img/favicon.ico">
</head>
<body>

<nav class="navbar navbar-expand-sm bg-light navbar-light">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">
    <img src="bilang.png" alt="logo" style="width:200px;">
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="psguniwide.php">PSG Uniwide</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="psgsite.php" style="color:#000;font-weight:bold;">PSG SITE</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="psgsbahm.php">PSG SBAHM</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="psgsaste.php">PSG SASTE</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="psgsnahs.php">PSG SNAHS</a>
    </li>
  </ul>
</nav>
<div class="jumbotron jumbotron-fluid" style="background-color:#1B2631;">
  <div class="container">
    <table>
        <tr>
            <td>
            <img src="SITE.png" style="width:150px;">
            </td>
            <td>
                <h1 style="color:#fff;">PSG SITE</h1>      
                <p style="color:#fff;">Total number of voters:
                <?php
                include "seer_carlos.php";
                $count = count_deptrows("votecount", "1");

                $count_it1 = count_votespercourseyear("1", "1", "BSIT");
                $count_engr1 = count_votespercourseyear("1", "1", "ENGR");
                $count_it2 = count_votespercourseyear("1", "2", "BSIT");
                $count_engr2 = count_votespercourseyear("1", "2", "ENGR");
                $count_it3 = count_votespercourseyear("1", "3", "BSIT");
                $count_engr3 = count_votespercourseyear("1", "3", "ENGR");
                $count_it4 = count_votespercourseyear("1", "4", "BSIT");
                $count_engr4 = count_votespercourseyear("1", "4", "ENGR");
                $count_engr5 = count_votespercourseyear("1", "5", "ENGR");

                $all_IT = $count_it1 + $count_it2 + $count_it3 + $count_it4;
                $all_ENGR = $count_engr1 + $count_engr2 + $count_engr3 + $count_engr4 + $count_engr5;
                ?>
                <b style="font-size:18px;"><?= $count ?></b><br>
                <span class="badge badge-warning">BSIT 1st Year: <?= $count_it1 ?></span>
                <span class="badge badge-warning">ENGR 1st Year: <?= $count_engr1 ?></span>
                <span class="badge badge-warning">BSIT 2nd Year: <?= $count_it2 ?></span>
                <span class="badge badge-warning">ENGR 2nd Year: <?= $count_engr2 ?></span><br>
                <span class="badge badge-warning">BSIT 3rd Year: <?= $count_it3 ?></span>
                <span class="badge badge-warning">ENGR 3rd Year: <?= $count_engr3 ?></span>
                <span class="badge badge-warning">BSIT 4th Year: <?= $count_it4 ?></span>
                <span class="badge badge-warning">ENGR 4th Year: <?= $count_engr4 ?></span>
                <span class="badge badge-warning">ENGR 5th Year: <?= $count_engr5 ?></span>
              </p>
            </td>
        </tr>
    </table>
  </div><!-- END CLASS CONTAINER -->
</div>
<div class="container">
    <div class="card">
      <div class="card-body">
      <?php
                session_start();
                $getSchoolwidePositions = get_where_custom("positions", "dsn_id", "2");
                foreach ($getSchoolwidePositions as $key => $rowSchoolwidePositions) {
                $schoolwidePosition_id = $rowSchoolwidePositions['position_id'];
                $schoolwidePositionTitle = $rowSchoolwidePositions['position_title'];
            ?>

            
            <?php
                    $custom_query = "SELECT candidates.candidates_id, candidates.student_id, candidates.position_id, students.fname, students.lname
                    FROM candidates
                    INNER JOIN students ON candidates.student_id=students.student_id
                    WHERE candidates.position_id='$schoolwidePosition_id'
                    ORDER BY students.lname";       
                ?>
                <h5 class="card-title"><?= $schoolwidePositionTitle ?></h5>
                <?php
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

                    $year = _get_year_from_studentID($schoolwideCandidateStudentID, "students");
                    $site_course = _get_sitecourse_from_studentID($schoolwideCandidateStudentID, "students");
                    $course_yr = _get_course_from_studentID($schoolwideCandidateStudentID, "students")."-".$year;
                    
                    ?>
                    <div class="card mb-3">
                        <table cellpadding="10">
                            <tr>
                                <td style="width:80px;">
                                    <img src="<?= $candidate_photo ?>" style="width:80px;" class="rounded-circle" >
                                </td>
                                <td style="width:300px;">
                                <b><?= $candidate_name ?></b><br>
                                <?= $course_yr ?>
                                </td>
                                <td>
                                    <?php
                                                                                                //dept_id
                                    $c_votes = count_candidatevotedept($schoolwideCandidateID, "1");
                                    if ($c_votes==0) {
                                        $p_votes = 0;
                                    } else {
                                            if ($schoolwidePosition_id==12){
                                                $p_votes = round(($c_votes/$all_IT)*100, 2);
                                            } elseif ($schoolwidePosition_id==13){
                                                $p_votes = round(($c_votes/$all_ENGR)*100, 2);
                                            } elseif ( ($schoolwidePosition_id>=15) && ($schoolwidePosition_id<=23) ) {
                                                if ( ($year==1)&&($site_course=="BSIT") ) {
                                                    $p_votes = round(($c_votes/$count_it1)*100, 2);
                                                }elseif ( ($year==1)&&($site_course=="ENGR") ) {
                                                    $p_votes = round(($c_votes/$count_engr1)*100, 2);
                                                }elseif ( ($year==2)&&($site_course=="BSIT") ) {
                                                    $p_votes = round(($c_votes/$count_it2)*100, 2);
                                                }elseif ( ($year==2)&&($site_course=="ENGR") ) {
                                                    $p_votes = round(($c_votes/$count_engr2)*100, 2);
                                                }elseif ( ($year==2)&&($site_course=="BSIT") ) {
                                                    $p_votes = round(($c_votes/$count_it2)*100, 2);
                                                }elseif ( ($year==2)&&($site_course=="ENGR") ) {
                                                    $p_votes = round(($c_votes/$count_engr2)*100, 2);
                                                }elseif ( ($year==3)&&($site_course=="BSIT") ) {
                                                    $p_votes = round(($c_votes/$count_it3)*100, 2);
                                                }elseif ( ($year==3)&&($site_course=="ENGR") ) {
                                                    $p_votes = round(($c_votes/$count_engr3)*100, 2);
                                                }elseif ( ($year==4)&&($site_course=="BSIT") ) {
                                                    $p_votes = round(($c_votes/$count_it4)*100, 2);
                                                }elseif ( ($year==4)&&($site_course=="ENGR") ) {
                                                    $p_votes = round(($c_votes/$count_engr4)*100, 2);
                                                }elseif ( ($year==5)&&($site_course=="ENGR") ) {
                                                    $p_votes = round(($c_votes/$count_engr5)*100, 2);
                                                }
                                        } else {
                                            $p_votes = round(($c_votes/$count)*100, 2);
                                        }   
                                    }
                                    
                                    ?>
                                    <div class="progress" style="height:30px">
                                        <div class="progress-bar bg-success" style="width:<?= $p_votes?>%"><?= $p_votes?>%</div>
                                    </div>
                                    <?= $c_votes." votes"; ?>
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

            ?>
        </div>
    </div>
        <!-- -->
      </div>
    </div>
</div>
<br><br>
</body>
</html>