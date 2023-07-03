<?php
session_start();
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
    <link rel="shortcut icon" href="assets/img/favicon.ico">    
    <link href="assets/css/app.min.css" rel="stylesheet">


</head>
<body>
    <div class="app">
        <div class="container-fluid p-h-0 p-v-20 bg full-height d-flex" style="background-image: url('assets/img/bg.png')">
            <div class="d-flex flex-column justify-content-between w-100">
                <div class="container d-flex h-100">
                    <div class="row align-items-center w-100">
                        <div class="col-md-7 col-lg-5 m-h-auto">
                        <?php if(isset($_SESSION['message'])): ?>
                                            <div class="alert alert-success-<?php echo $_SESSION['success']; ?> <?= $_SESSION['success']=='danger' ? 'bg-danger text-light' : null ?>" role="alert alert-primary">
                                                <?php echo $_SESSION['message']; ?>
                                            </div>
                                            <?php unset($_SESSION['message']); ?>
                                        <?php endif ?>
                            <div class="card shadow-lg">
                           
                                <div class="card-body">
                               
                                    <div class="d-flex align-items-center justify-content-between m-b-30">
                                        <img class="img-fluid" style="max-width:150px; margin-top: 15px;" alt="" src="assets/img/bilang_2.png">
                                        <h2 class="m-b-0">Login</h2>
                                    </div>
                                    <form action="_login_proc.php" method="post">
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="userName">Student ID:</label>
                                            <input type="text" class="form-control" placeholder="Enter Student ID" name="student_id" id="student_id" style='text-transform:uppercase' autocomplete="off">
                                            <span id="result"></span>
                                        </div>
                                        <div class="form-group">
                                            <div class="d-flex align-items-center justify-content-between p-t-15">
                                                <button class="btn btn-primary">Login</button>
                                            </div>
                                        </div>
                                    </form>
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