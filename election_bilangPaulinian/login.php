<?php
include ('server/servers.php');
//include ('get_code.php');
include('account_verify.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>bilangPaulinian</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/bp.png">

    <!-- page css -->

    <!-- Core css -->
    <link href="assets/css/app.min.css" rel="stylesheet">

</head>

<body>
    <div class="app">
        <div class="container-fluid p-h-0 p-v-20 bg full-height d-flex" style="background-image: url('assets/images/bg.png')">
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
                                        <img class="img-fluid" style="max-width:200px; margin-top: 15px;" alt="" src="assets/images/bilang_2.png">
                                        <h2 class="m-b-0">Sign In</h2>
                                       
                                    </div>
                                    <form action="proc/login.php" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                        <label class="font-weight-semibold" >User ID:</label>
                                        <input type="text" class="form-control" name="user_id" id="user_id" required>
                                            <span id="result"></span>
                                        </div>
                                        <div class="form-group">
                                        <label class="font-weight-semibold" >Password:</label>
                                        <input type="password" class="form-control" name="password" required>
                                          
                                        </div>
                                        <div class="form-group">
                                            <div class="d-flex align-items-center p-t-15">
                                                <button class="btn btn-primary">Log In</button>
                                                
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
                        THE PAULINIAN STUDENT GOVERNMENT
                        <img src="assets/images/logo/spup-fold.png" alt="" style="max-width:50px;">
                        <img src="assets/images/uniwide.png" alt="" style="max-width:50px;">
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <!-- Core Vendors JS -->
    <script src="assets/js/vendors.min.js"></script>

    <!-- page js -->

    <!-- Core JS -->
    <script src="assets/js/app.min.js"></script>

    <script>
       $(document).ready(function(){
        load_data();
        function load_data(query)
        {
            $.ajax({
                url:"account_verify.php",
                method:"post",
                data:{query:query},
                success:function(data)
                {
                    $('#result').html(data);
                }
            });
        }
        
        $('#email_add').keyup(function(){
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
    </script>

</body>

</html>