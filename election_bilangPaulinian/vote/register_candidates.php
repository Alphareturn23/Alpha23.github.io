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
    <title>Candidates Registration | BilangPaulinian</title>

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
                        <div class="col-md-7 col-lg-10 m-h-auto">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between m-b-30">
                                        <img class="img-fluid" style="max-width:150px; margin-top: 15px;" alt="" src="assets/img/bilang_2.png">
                                        <h2 class="m-b-0">Candidates Registration</h2>
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
                                        <div class="media align-items-center">
                                            <div class="avatar avatar-image  m-h-10 m-r-15" style="height: 80px; width: 80px">
                                                <img src="assets/img/person.png" alt="">
                                            </div>
                                            <div class="m-l-20 m-r-20">
                                                <h5 class="m-b-5 font-size-18">Candidate Portrait</h5>
                                                <p class="opacity-07 font-size-13 m-b-0">
                                                    Recommended Dimensions: <br>
                                                    800x800 Max fil size: 1MB
                                                </p>
                                            </div>
                                            <div>
                                                <input type="file" class="form-control btn btn-tone" name="image">
                                            </div>
                                        </div><br>
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="">Student ID:</label>
                                            <input type="text" class="form-control" placeholder="Enter Student ID" name="student_id" id="student_id" autocomplete="off" required>
                                            <span id="result"></span>
                                        </div>
                                       
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="">Designation:</label>
                                            <select class="form-control" name="desc" id="designation" required>
                                                <option selected>Select Designation</option>
                                                <?php
                                              
                                                $sql = "select * from designation";
                                                $result = $conn->query($sql);
                                                if ($result->num_rows > 0) {
                                                    while ($row = $result->fetch_assoc()) {
                                                ?>
                                                        <option value="<?= $row['dsn_id'] ?>">
                                                            <?= $row['description'] ?>
                                                        </option>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="">Position:</label>
                                            <select id="title" class="form-control" name="position" required>
                                                <option disabled selected>Select Position</option>

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
                            
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <!-- Core Vendors JS -->
    <script src="assets/js/vendors.min.js"></script>

    <!-- page js -->
   
<script type="text/javascript">
    $(document).ready(function() {
        $("#designation").on('change', function() {
            var dsn_id = $(this).val();

            $.ajax({
                method: "POST",
                url: "get_data.php",
                data: {
                    id: dsn_id
                },
                datatype: "html",
                success: function(data) {
                    $("#title").html(data);

                }
            });
        });
    });
    $(document).ready(function() {
        load_data();

        function load_data(query) {
            $.ajax({
                url: "verify_stud_id.php",
                method: "post",
                data: {
                    query: query
                },
                success: function(data) {
                    $('#result').html(data);
                }
            });
        }

        $('#student_id').keyup(function() {
            var search = $(this).val();
            if (search != '') {
                load_data(search);
            } else {
                load_data();
            }
        });
    });
</script>

    <!-- Core JS -->
    <script src="assets/js/app.min.js"></script>

</body>

</html>