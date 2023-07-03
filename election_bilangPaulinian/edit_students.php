<?php
include ('server/servers.php');
include ('layouts/header.php');
include ('layouts/sidebar.php');


$id = $_GET['id'];
$dept_id = $_GET['dept_id'];

$query = "SELECT * from students WHERE student_id= '$id'";
$result = $conn->query($query);

if ($result->num_rows >0) {
    while ($row = $result->fetch_assoc()) {
        $student_id = $row['student_id'];
        $firstname = $row['fname'];
        $lastname = $row['lname'];
        $course = $row['course'];
        $year = $row['year'];
      }
  }

$query2 = "SELECT * from tbl_departments WHERE dept_id= '$dept_id'";
$result2 = $conn->query($query2);

if ($result2->num_rows >0) {
    while ($row = $result2->fetch_assoc()) {
        $dept = $row['dept_title'];
      }
  }

?>


<!-- Page Container START -->
    <div class="page-container">

        <!-- Content Wrapper START -->
            <div class="main-content">
                <div class="page-header">
                    <h2 class="header-title">Edit Student</h2> 
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                            </nav>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Student Infomation</h4>
                        </div>
                        <div class="card-body">
                        <?php if(isset($_SESSION['message'])): ?>
                            <div class="alert alert-success-<?php echo $_SESSION['success']; ?> <?= $_SESSION['success']=='danger' ? 'bg-danger text-light' : null ?>" role="alert alert-primary">
                                <?php echo $_SESSION['message']; ?>
                            </div>
                        <?php unset($_SESSION['message']); ?>
                        <?php endif ?>
                            <form method="post" action="proc/edit_student.php?id=<?= $id ?>">
                            <div class="form-row">
                    <div class="form-group col-md-4">
                            <label class="font-weight-semibold" for="">Student ID:</label>
                            <input type="text" class="form-control" value="<?=$student_id?>" name="student_id" id="student_id" autocomplete="off" disabled>
                            <span id="result"></span>
                    </div>
                    <div class="form-group col-md-4">
                        <label class="font-weight-semibold" for="">First Name:</label>
                        <input type="text" class="form-control" id="" value="<?=$firstname?>" name="firstname" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label class="font-weight-semibold" for="">Last Name:</label>
                        <input type="text" class="form-control" id="" value="<?=$lastname?>" name="lastname" required>
                    </div>
                </div>

                <div class="form-row"> 
                    <div class="form-group col-md-4">    
                        <label class="font-weight-semibold" for="">Department:</label>   
                        <select id="selectDepartment" class="form-control" name="dept" required>
                            <option value="" disabled selected><?=$dept?></option>
                            <!--option value="" disabled selected>Select Department</option-->
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
                            <option value="" selected><?=$course?></option>

                        </select>
                    </div>

                    <div class="form-group col-md-4">
                        <label class="font-weight-semibold" for="">Year Level:</label>
                        <select id="" class="form-control" name="yrlevel" required>
                            <option value="" selected disabled><?=$year?></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <button type="submit" class="btn btn-primary m-r-5">Update Student</button>
                    <a class="btn btn-default m-r-5" href="view_students.php">Cancel</a>
                </div>

            </form>
        </div>
        <!-- Content goes Here -->
    </div>
    <!-- Content Wrapper END -->

   
</div>
<?php
    include('layouts/footer.php');
?>
<!-- Page Container END -->
</div>
</div>

<?php include('layouts/scripts.php'); ?>
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

    $(document).ready(function() {
        load_data();

        function load_data(query) {
            $.ajax({
                url: "get_studid.php",
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



</body>

</html>