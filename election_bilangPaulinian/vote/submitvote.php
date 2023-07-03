<?php
session_start();

if (!isset($_SESSION['total_sessions'])) {
    header("Location: index.php");
}

if (!isset($_SESSION['student_id'])) {
    header("Location: index.php");
}
include "seer_carlos.php";

/*
echo '<pre>';
var_dump($_SESSION);
echo '</pre>';
*/

for ($i=0; $i <= $_SESSION['total_sessions']-1; $i++) { 
    $a = $_SESSION['votes'][$i];
    if ($_SESSION['cc_'.$a]=="checked"){
        //add the vote to dbase
        $student_id = $_SESSION['student_id'];
        $b = explode("-",$a);
        $position_id =  $b[0];
        $candidate_id = $b[1];
        //echo $position_id." ".$candidate_id." ".$student_id."<br>";
        $vote_data = array(
            //columname from table => value from session_variable
                    "student_id" => $student_id, 
                    "candidates_id" => $candidate_id, 
                    "position_id" => $position_id
        );
        
        insert($vote_data, "votes");
    }
}

$student_deptid = _get_deptid_from_studentid("students", $student_id);
$vote_count = array(
                "student_id" => $student_id,
                "dept_id"    => $student_deptid
);
insert($vote_count, "votecount");
session_destroy();


?>

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
    <link rel="shortcut icon" href="assets/images/logo/favicon.png">    
    <link href="assets/css/app.min.css" rel="stylesheet">


</head>
<body>
    <div class="app">
        <div class="container-fluid p-h-0 p-v-20 bg full-height d-flex" style="background-image: url('assets/img/bg.png')">
            <div class="d-flex flex-column justify-content-between w-100">
                <div class="container d-flex h-100">
                    <div class="row align-items-center w-100">
                        <div class="col-md-7 col-lg-5 m-h-auto">
                            <div class="alert alert-success">
                                <div class="d-flex align-items-center justify-content-start">
                                    <span class="alert-icon">
                                        <i class="anticon anticon-check-o"></i>
                                    </span>
                                    <span>You have Successfully Voted</span>
                                </div>
                            </div>
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between m-b-30">
                                        <img class="img-fluid" style="max-width:150px; margin-top: 15px;" alt="" src="assets/img/bilang.png">
                                        <h2 class="m-b-0">Login</h2>
                                        <?php if(isset($_SESSION['message'])): ?>
                                            <div class="alert alert-success-<?php echo $_SESSION['success']; ?> <?= $_SESSION['success']=='danger' ? 'bg-danger text-light' : null ?>" role="alert alert-primary">
                                                <?php echo $_SESSION['message']; ?>
                                            </div>
                                            <?php unset($_SESSION['message']); ?>
                                        <?php endif ?>
                                    </div>
                                    <form action="_login_proc.php" method="post">
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="userName">Student ID:</label>
                                            <input type="text" class="form-control" placeholder="Enter Student ID" name="student_id" id="student_id" autocomplete="off" required>
                                            <span id="result"></span>
                                        </div>
                                        <div class="form-group">
                                            <div class="d-flex align-items-center justify-content-between p-t-15">
                                                <button class="btn btn-primary">Sign In</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-none d-md-flex p-h-40 justify-content-between">
                    <span class="">© St. Paul University Philippines</span>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            THE PAULINIAN STUDENT GOVERNMENT
                            <img src="assets/img/logo/spup-fold.png" alt="" style="max-width:50px;">
                            <img src="assets/img/uniwide.png" alt="" style="max-width:50px;">
                        </li>
                    </ul>
            </div>
        </div>
    </div>

<script>
    $(document).ready(function(){
        load_data();
        function load_data(query)
        {
            $.ajax({
                url:"verify_stud_id.php",
                method:"post",
                data:{query:query},
                success:function(data)
                {
                    $('#result').html(data);
                }
            });
        }

        $('#student_id').keyup(function(){
            var search = $(this).val();
            if(search != '')
            {
                load_data(search);
            }
            else
            {
                load_data();			
            }
        });
    });
    </script>
</body>
</html>