<?php
include('server/servers.php');
include('layouts/header.php');
include('layouts/sidebar.php');
?>

<!-- Page Container START -->
<div class="page-container">

    <!-- Content Wrapper START -->
    <div class="main-content">
        <div class="page-header">
            <h2 class="header-title">Add Candidates</h2>
            
        </div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Candidate Infomation</h4>
            </div>
            <div class="card-body">
                <?php if (isset($_SESSION['message'])) : ?>
                    <div class="alert alert-success-<?php echo $_SESSION['success']; ?> <?= $_SESSION['success'] == 'danger' ? 'bg-danger text-light' : null ?>" role="alert alert-primary">
                        <?php echo $_SESSION['message']; ?>
                    </div>
                    <?php unset($_SESSION['message']); ?>
                <?php endif ?>
                <hr class="m-v-25">
                <form method="POST" action="proc/save_candidate.php" enctype="multipart/form-data">
                    <div class="media align-items-center">
                        <div class="avatar avatar-image  m-h-10 m-r-15" style="height: 80px; width: 80px">
                            <img src="assets/images/logo/spup-fold.png" alt="">
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
                    </div>
                    <hr>
                    <br> 
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label class="font-weight-semibold" for="userName">Student ID:</label>
                            <input type="text" required class="form-control" autocomplete="new-password" name="student_id" id="student_id" placeholder="Student ID">
                            <div id="result"></div>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="font-weight-semibold" for="userName">First Name:</label>
                            <input type="text" required class="form-control" autocomplete="new-password" name="firstname" required placeholder="First Name">
                            <div id="result"></div>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="font-weight-semibold" for="">Last Name:</label>
                            <input type="text" class="form-control" id="" placeholder="Last Name" name="lastname" value="" required>
                        </div>

                        <div class="form-row"> 
                            <div class="form-group col-md-4">    
                                <label class="font-weight-semibold" for="">Department:</label>   
                                <select id="selectDepartment" class="form-control" name="dept" required>
                                    <option value="" selected>Select Department</option>
                                    <?php
                                    $sql = "select * from tbl_departments";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
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

                            <div class="form-group col-md-4">
                                <label class="font-weight-semibold" for="">Course:</label>
                                <select id="populateCourses" class="form-control" name="course" required>
                                    <option value="" selected>Select a Course</option>

                                </select>
                            </div>

                            <div class="form-group col-md-4">
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
                        </div>


                        <div class="form-group col-md-4">
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
                        <div class="form-group col-md-4">
                            <label class="font-weight-semibold" for="">Position:</label>
                            <select id="title" class="form-control" name="position" required>
                                <option disabled selected>Select Position</option>

                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                             <input  type="checkbox"  name="req[]" value="2 by 2" >
                             <label for="checkbox2">2 by 2 picture with name</label>
                        </div>

                         <div class="form-group">
                             <input  type="checkbox"  name="req[]" value="coc">
                             <label for="checkbox2">Certificate of Candidacy Form </label>
                        </div>

                        <div class="form-group">
                             <input  type="checkbox"  name="req[]" value="recom">
                             <label for="checkbox2">Recommendation Letter </label>
                        </div>
                        <div class="form-group">
                             <input  type="checkbox"  name="req[]" value="interview">
                             <label for="checkbox2">Interview Result </label>
                        </div>
                        <div class="form-group">
                             <input  type="checkbox"  name="req[]" value="valid_id">
                             <label for="checkbox2"> Validated School ID </label>
                        </div>
                        <div class="form-group">
                             <input  type="checkbox"  name="req[]" value="cogm">
                             <label for="checkbox2"> Certificate of Good Moral </label>
                        </div>
                        <div class="form-group">
                             <input  type="checkbox"  name="req[]" value="cog">
                             <label for="checkbox2">Certificate of Grades </label>
                        </div>
                        <div class="form-group">
                             <input  type="checkbox"  name="req[]" value="la">
                             <label for="checkbox2">At least One(1) Leadership Seminar Attended/PSLDP</label>
                        </div>
                    <div class="form-row">
                        <button type="submit" class="btn btn-primary m-r-5">Add Candidates</button>
                        <a class="btn btn-default m-r-5" href="candidates.php">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
        <!-- Content goes Here -->
    </div>
    <!-- Content Wrapper END -->

    <?php
    include('layouts/footer.php');
    ?>
</div>
<!-- Page Container END -->
</div>
</div>




<?php
    include('layouts/scripts.php');
?> 

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