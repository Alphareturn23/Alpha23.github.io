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
      <a class="nav-link" href="psgsite.php">PSG SITE</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="psgsbahm.php" style="color:#000;font-weight:bold;">PSG SBAHM</a>
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
            <img src="sbahm.png" style="width:150px;">
            </td>
            <td>
                <h1 style="color:#fff;">PSG SBAHM</h1>      
                <p style="color:#fff;">Total number of voters:
                <?php
                include "seer_carlos.php";
                $count = count_deptrows("votecount", "3");

                $count_1 = count_votesperyear("3", "1");
                $count_2 = count_votesperyear("3", "2");
                $count_3 = count_votesperyear("3", "3");
                $count_4 = count_votesperyear("3", "4");
                ?>
                <b style="font-size:18px;"><?= $count ?></b><br>
                <span class="badge badge-warning">1st Year: <?= $count_1 ?></span>
                <span class="badge badge-warning">2nd Year: <?= $count_2 ?></span>
                <span class="badge badge-warning">3rd Year: <?= $count_3 ?></span>
                <span class="badge badge-warning">4th Year: <?= $count_4 ?></span>
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
                $getSchoolwidePositions = get_where_custom("positions", "dsn_id", "5");
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
                                    $c_votes = count_candidatevotedept($schoolwideCandidateID, "3");
                                    if ($c_votes==0) {
                                        $p_votes = 0;
                                    } else {
                                        if ( ($schoolwidePosition_id>=50) && ($schoolwidePosition_id<=53) ) {
                                            if ($year==1) {
                                                $p_votes = round(($c_votes/$count_1)*100, 2);
                                            } elseif ($year==2) {
                                                $p_votes = round(($c_votes/$count_2)*100, 2);
                                            } elseif ($year==3) {
                                                $p_votes = round(($c_votes/$count_3)*100, 2);
                                            } elseif ($year==4) {
                                                $p_votes = round(($c_votes/$count_4)*100, 2);
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