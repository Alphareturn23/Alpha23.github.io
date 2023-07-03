<?php
include ('../server/servers.php');
include ('get_code.php');
$query = "SELECT * FROM tbl_departments";
    $result = $conn->query($query);

    $dept = array();
	while($row = $result->fetch_assoc()){
		$dept[] = $row; 
	}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Registration | BilangPaulinian</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">    

    <!-- page css -->

    <!-- Core css -->
    <link href="assets/css/app.min.css" rel="stylesheet">

</head>

<body>
    <div class="app">
        <div class="container-fluid p-h-0 p-v-20 bg full-height d-flex" style="background-image: url('assets/img/bg.png')">
            <div class="d-flex flex-column justify-content-between w-100">
                <div class="container d-flex h-100">
                    <div class="row align-items-center w-100">
                        <div class="col-md-7 col-lg-5 m-h-auto">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between m-b-30">
                                        <img class="img-fluid" style="max-width:150px; margin-top: 15px;" alt="" src="assets/img/bilang_2.png">
                                        <h2 class="m-b-0">Registration</h2>
                                    </div>
                                    <div style="width:100%;">
                                        <?php if(isset($_SESSION['message'])): ?>
                                            <div class="alert alert-success-<?php echo $_SESSION['success']; ?> <?= $_SESSION['success']=='danger' ? 'bg-danger text-light' : null ?>" role="alert alert-primary">
                                                <?php echo $_SESSION['message']; ?>
                                            </div>
                                            <?php unset($_SESSION['message']); ?>
                                        <?php endif ?>
                                    </div>
                                    <form  action="register_proc.php" method="post">

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="font-weight-semibold" for="">Student ID:</label>
                                                <input type="text" class="form-control" placeholder="Enter Student ID" name="student_id" id="student_id"   style='text-transform:uppercase' autocomplete="off" required>
                                                <span id="result"></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="email">First Name:</label>
                                            <input type="text" class="form-control" placeholder="Enter First Name" name="firstname" autocomplete="off" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="">Last Name:</label>
                                            <input type="text" class="form-control" placeholder="Enter Last Name" name="lastname" autocomplete="off" required>
                                        </div>
                                       
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="">Department:</label>
                                            <select id="selectDepartment" class="form-control" name="dept" required>
                                                <option value="" selected>Select Department</option>
                                                <?php
                                                    $sql = "select * from tbl_departments where dept_id!=5";
                                                    $result = $conn->query($sql);
                                                    if ($result->num_rows >0) {
                                                        while ($row = $result->fetch_assoc()) {
                                                    ?>
                                                        <option value="<?= $row['dept_id'] ?>">
                                                        <?= $row['dept_title'] ?>
                                                        </option>
                                                    <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="">Course:</label>
                                            <select id="populateCourses" class="form-control" name="course" required>
                                                <option value="" selected>Select a Course</option>

                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="">Year Level:</label>
                                            <select id="" class="form-control" name="yrlevel" required> 
                                                <option value="" selected>Select Year Level</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <div class="d-flex align-items-center justify-content-between p-t-15">
                                                <button class="btn btn-primary">Register</button>
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


    <!-- Core Vendors JS -->
    <script src="assets/js/vendors.min.js"></script>

    <!-- page js -->
    <script>
    $(document).ready(function() {
    $("#selectDepartment").on('change', function() {
    var dept_id = $(this).val();
                $.ajax({
                method: "POST",
                url: "get_courses.php",
                data: {
                id: dept_id
                },
                datatype: "html",
                success: function(data) {
                $("#populateCourses").html(data);

                }
            });
        });
    });

    $(document).ready(function(){
    load_data();
    function load_data(query)
    {
        $.ajax({
        url:"get_studid.php",
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
    <!-- Core JS -->
    <script src="assets/js/app.min.js"></script>

</body>

</html>