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
      <a class="nav-link" href="psguniwide.php" style="color:#000;font-weight:bold;">PSG Uniwide</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="psgsite.php">PSG SITE</a>
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
            <img src="uniwide.png" style="width:150px;">
            </td>
            <td>
                <h1 style="color:#fff;">PSG Uniwide</h1>      
                <p style="color:#fff;">Total number of voters:
                <?php
                include "seer_carlos.php";
                $count = count_rows("votecount");
                ?>
                <b style="font-size:18px;"><?= $count ?></b><br>
                <?php
                $count_site = count_deptrows("votecount", 1);
                $count_saste = count_deptrows("votecount", 2);
                $count_sbahm = count_deptrows("votecount", 3);
                $count_snahs = count_deptrows("votecount", 4);
                ?>
                <span class="badge badge-warning">SITE: <?= $count_site ?></span>
                <span class="badge badge-warning">SASTE: <?= $count_saste ?></span>
                <span class="badge badge-warning">SBAHM: <?= $count_sbahm ?></span>
                <span class="badge badge-warning">SNAHS: <?= $count_snahs ?></span>
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
                $votes = array();
                $getUniwidePositions = get_where_custom("positions", "dsn_id", "1");
                foreach ($getUniwidePositions as $key => $rowUniwidePositions) {
                    $uniwidePosition_id = $rowUniwidePositions['position_id'];
                    $uniwidePositionTitle = $rowUniwidePositions['position_title'];
                ?>
                <h5 class="card-title"><?= $uniwidePositionTitle ?></h5>
                <?php
                    
                    $custom_query = "SELECT candidates.candidates_id, candidates.student_id, candidates.position_id, students.fname, students.lname
                    FROM candidates
                    INNER JOIN students ON candidates.student_id=students.student_id
                    WHERE candidates.position_id='$uniwidePosition_id'
                    ORDER BY students.lname";    
                    $getCandidatesFromPositionID = custom_query($custom_query);
                    foreach ($getCandidatesFromPositionID as $key => $rowCandidates) {
                        $uniwideCandidateID = $rowCandidates['candidates_id'];
                        $uniwideCandidateStudentID = $rowCandidates['student_id'];
                        $candidate_name = _get_fullname_from_studentID($uniwideCandidateStudentID, "students");
                        $candidate_photo = _get_photo_from_candidateID2($uniwideCandidateID, "candidates");
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
                        

                        if ($uniwidePosition_id==7) {
                          $candidate_deptid  = _get_deptid_from_candidate_id("students", $uniwideCandidateStudentID);
                          $count = count_deptrows("votecount", $candidate_deptid);
                        }
                        
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
                                        $c_votes = count_candidatevote("votes", $uniwideCandidateID);
                                        if ($c_votes==0) {
                                          $p_votes = 0;
                                        } else {
                                          $p_votes = round(($c_votes/$count)*100, 2);
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
                    // end foreach getCandidatesFromPositionID
                ?>
                
                <?php
                } // end foreach getUniwidePositions
                
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