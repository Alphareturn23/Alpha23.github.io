<?php
session_start();
include "seer_carlos.php";
$dept_id = $_SESSION["dept_id"];
/*
echo '<pre>';
var_dump($_SESSION);
echo '</pre>';
*/
?>
<!DOCTYPE html>
<html lang="en">

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
    <link rel="shortcut icon" href="assets/img/favicon.ico">    
    <link href="assets/css/app.min.css" rel="stylesheet">


</head>
<body>
    <div class="app">
        <div class="container-fluid p-h-0 p-v-20 bg full-height d-flex" style="background-image: url('assets/img/bg.png')">
            <div class="d-flex flex-column  w-100">
                <div class="container d-flex h-100">
                    <div class="main-content">

                        <div class="card m-l-120" style="width: 900px;">
                            <div class="card-body">

                                    <div class="d-flex align-items-center justify-content-between m-b-30">
                                        <h2 class="m-b-0">Review your Votes</h2>
                                        <img class="img-fluid" style="max-width:150px; margin-top: 15px;" alt="" src="assets/images/logo/bilang.png">
                                    </div>
                                                           
                                <div class="m-t-25">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-bordered ">
                                            <thead style="font-size:22px;">
                                                <tr>
                                                    
                                                    <th scope="col">Candidate</th>
                                                    <th scope="col">Position</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            for ($i=0; $i <= $_SESSION['total_sessions']-1; $i++) { 
                                                $a = $_SESSION['votes'][$i];
                                                if (isset($_POST['c_'.$a])){
                                                    //add the vote to dbase
                                                    $student_id = $_SESSION['student_id'];
                                                    $b = explode("-",$a);
                                                    $position_id =  $b[0];
                                                    $candidate_id = $b[1];
                                                    $_SESSION['cc_'.$a] = "checked";
                                                    //echo $student_id." ".$candidate_id." ".$position_id."<br>";
                                                ?>
                                                    
                                                        <tr>
                                                           
                                                            <td><?= _get_fullname_from_CandidateID($candidate_id) ?></td>
                                                            <td><b><?=  _get_position_from_positionID($position_id, "positions")?></b></td>
                                                        </tr>
                                                <?php
                                                } else {
                                                    $_SESSION['cc_'.$a] = " ";
                                                }
                                            }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                
                                <?php
                                if ($dept_id==1) {
                                    $location =  "votesite.php";
                                } elseif ($dept_id==2) {
                                    $location =  "votesaste.php";
                                } elseif ($dept_id==3) {
                                    $location =  "votesnahs.php";
                                } elseif ($dept_id==4) {
                                    $location =  "votesbahm.php";
                                    
                                } 
                                ?>
                                
                                <div class="form-group">
                                <a class="btn btn-success btn-lg p-l-100 p-r-100" style="font-size: 22px;" href="submitvote.php">CONFIRM</a>
                                <a class="btn btn-warning btn-lg p-l-100 p-r-100 m-l-20" style="font-size: 22px;" href="<?= $location?>">EDIT</a>
                                </div>

                            </div>
                        </div>
                        <!-- Content goes Here -->

                       
                    </div>
                </div>

               
                <div class="d-none d-md-flex p-h-40 justify-content-between">
                    <span class="">© St. Paul University Philippines</span>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                       
                        </li>
                  
                    </ul>
                </div>
            </div>
        </div>
    </div>

    
    <?php include ('../layouts/scripts.php'); ?>
</body>

</html>



