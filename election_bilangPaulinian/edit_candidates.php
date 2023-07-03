<?php

include ('server/servers.php');
include ('layouts/header.php');
include ('layouts/sidebar.php');

$dept_id = $_GET['dept_id'];

$query2 = "SELECT * from tbl_departments WHERE dept_id= '$dept_id'";
$result2 = $conn->query($query2);

if ($result2->num_rows >0) {
    while ($row = $result2->fetch_assoc()) {
        $dept = $row['dept_title'];
      }
  }
$id = $_GET['id'];
    $query = "SELECT * FROM candidates 
    INNER JOIN students ON candidates.student_id = students.student_id 
    
    INNER JOIN tbl_departments ON students.dept_id = tbl_departments.dept_id
    WHERE candidates.candidates_id = '$id'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $fname = $row['fname'];
            $lname = $row['lname'];
         //  $desc = $row['description'];
            $student_id = $row['student_id'];
           $dept_title = $row['dept_title'];
            $course = $row['course'];
            $year = $row['year'];
        }
    }

?>

<!-- Page Container START -->
<div class="page-container">
      <!-- Content Wrapper START -->
      <div class="main-content">
             <div class="page-header no-gutters has-tab">
                        <h2 class="font-weight-normal">Candidates Information</h2>
                        <ul class="nav nav-tabs" >
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tab-account">Basic Information</a>
                            </li>
                            
                           
                        </ul>
            </div>
            <div class="container">
                        <div class="tab-content m-t-15">
                            <div class="tab-pane fade show active" id="tab-account" >
                            <?php 

                                if(isset($_GET['id']))
                                {
                                    $id = $_GET['id'];
                                    
                                
                                    $sql = "SELECT * FROM candidates 
                                    INNER JOIN students ON candidates.student_id = students.student_id 
                                   
                                    INNER JOIN tbl_departments ON students.dept_id = tbl_departments.dept_id
                                    WHERE candidates.candidates_id = '$id'";
                                    $result = $conn->query($sql);


                                    if ($result->num_rows > 0) {
                                        $row = $result->fetch_array();


                                        $req = $row['requirements'];
                                        $b = explode(",", $req);
                                ?>
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Basic Infomation</h4>
                                    </div>
                                    <div class="card-body">
                                        <form method="POST" name="myForm" action="proc/edit_candidate.php" enctype="multipart/form-data">
                                            <input type="hidden" name="student_id" value="<?php echo $row['student_id'] ?>">
                                            <input type="hidden" name="candidates_id" value="<?php echo $row['candidates_id'] ?>">
                                            <div class="media align-items-center">
                                            <div class="avatar avatar-image  m-h-10 m-r-15" style="height: 80px; width: 80px">
                                                <img src="<?php echo "uploads/candidates/".$row['picture'] ?>" alt="">
                                            </div>
                                            <div class="m-l-20 m-r-20">
                                                <h5 class="m-b-5 font-size-18">Change Avatar</h5>
                                                <p class="opacity-07 font-size-13 m-b-0">
                                                    Recommended Dimensions: <br>
                                                    120x120 Max fil size: 5MB
                                                </p>
                                            </div>
                                            <div>
                                                <input type="file" class="btn btn-tone btn-primary" name="image">
                                                <input type="hidden" class="form-control"  name="old_image" value="<?php echo $row['picture'] ?>">
                                            </div>
                                           
                                            </div>
                                            <hr class="m-v-25">
                                        
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label class="font-weight-semibold" for="userName">Student ID:</label>
                                                    <input type="text" value="<?=$student_id?>" class="form-control" autocomplete="off" name="student_id" id="student_id">
                                                        <div id="result"></div>
                                                </div>

                                                <div class="form-group col-md-4">
                                                    <label class="font-weight-semibold" for="userName">First Name:</label>
                                                    <input type="text" required class="form-control"  name="firstname" required value="<?= $fname ?>" placeholder="First Name">
                                                    <div id="result"></div>
                                                </div>

                                                <div class="form-group col-md-4">
                                                    <label class="font-weight-semibold" for="">Last Name:</label>
                                                    <input type="text" class="form-control" id="" placeholder="Last Name" name="lastname" value="<?=$lname ?>" required>
                                                </div>
                                            </div>

                                            <div class="form-row"> 

                                                <div class="form-group col-md-6">    
                                                        <label class="font-weight-semibold" for="">Department:</label>   
                                                        
                                                           
                                                            <?php
                                                            $sql = "SELECT * FROM tbl_departments where dept_id";
                                                            $result = mysqli_query($conn, $sql);
                                                            if (mysqli_num_rows($result) > 0) {
                                                               
                                                            ?>
                                                            <select class="form-control" id="selectDepartment" required name="dept">
                                                                <option selected>Select Department</option>
                                                                   
                                                            <?php
                                                                foreach ($result as $dept) {
                                                                    ?>
                                                                    <option value="<?= $dept['dept_id']; ?>" <?= $dept['dept_id'] == $row['dept_id'] ? 'selected' : '' ?> >
                                                                        <?= $dept['dept_title']; ?>
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

                                                <div class="form-group col-md-2">
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
                                                <div class="form-group col-md-3">
                                                        <label class="font-weight-semibold" for="">Designation:</label>
                                                        <?php
                                                                $sql = "SELECT * FROM designation where dsn_id";
                                                                $result = mysqli_query($conn, $sql);
                                                                if (mysqli_num_rows($result) > 0) {
                                                                
                                                                ?>
                                                                <select class="form-control" id="designation" required name="desc">
                                                                    <option selected>Select Designation</option>
                                                                    
                                                                <?php
                                                                    foreach ($result as $desig) {
                                                                        ?>
                                                                        <option value="<?= $desig['dsn_id']; ?>" <?= $desig['dsn_id'] == $row['dsn_id'] ? 'selected' : '' ?> >
                                                                            <?= $desig['description']; ?>
                                                                        </option>
                                                                        <?php
                                                                    }
                                                                    
                                                                }
                                                                ?>
                                                                </select>
                                                </div>

                                                <div class="form-group col-md-3">
                                                    <label class="font-weight-semibold" for="">Position:</label>
                                                   
                                                    <?php
                                                            $sql = "SELECT * FROM positions where position_id";
                                                            $result = mysqli_query($conn, $sql);
                                                            if (mysqli_num_rows($result) > 0) {
                                                               
                                                            ?>
                                                            <select id="title" class="form-control" name="position"  required>
                                                                <option selected>Select Position</option>
                                                                   
                                                            <?php
                                                                foreach ($result as $post) {
                                                                    ?>
                                                                    <option value="<?= $post['position_id']; ?>" <?= $post['position_id'] == $row['position_id'] ? 'selected' : '' ?> >
                                                                        <?= $post['position_title']; ?>
                                                                    </option>
                                                                    <?php
                                                                }
                                                                 
                                                             }
                                                            ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                    <label for="">Requirements</label>
                                                            <br> <br>
                                                    <div class="form-group">
                                                        <input  type="checkbox" name="req[]"  value="comelec"
                                                        <?php 

                                                        if(in_array("comelec",$b))
                                                        {
                                                            echo "checked";
                                                        }
                                                        
                                                        ?>
                                                        
                                                        >
                                                        <label for="checkbox1">Comelec Slip</label>

                                                        
                                                    </div>

                                                    <div class="form-group">
                                                        <input  type="checkbox"  name="req[]" value="picture"

                                                        <?php 

                                                        if(in_array("picture", $b))
                                                        {
                                                            echo "checked";
                                                        }

                                                        ?>
                                                        
                                                        
                                                        >
                                                        <label for="checkbox2">2 by 2 picture with name</label>
                                                    </div>

                                                    <div class="form-group">
                                                        <input  type="checkbox"  name="req[]" value="coc"

                                                        <?php 

                                                            if(in_array("coc", $b))
                                                            {
                                                                echo "checked";
                                                            }

                                                        ?>
                                                        
                                                        
                                                        
                                                        
                                                        >
                                                        <label for="checkbox2">Certificate of Candidacy Form </label>
                                                    </div>

                                                    <div class="form-group">
                                                        <input  type="checkbox"  name="req[]" value="recom"

                                                        <?php 

                                                            if(in_array("recom", $b))
                                                            {
                                                                echo "checked";
                                                            }

                                                        ?>
                                                        
                                                        
                                                        >
                                                        <label for="checkbox2">Recommendation Letter </label>
                                                    </div>
                                                    <div class="form-group">
                                                        <input  type="checkbox"  name="req[]" value="interview"
                                                        <?php 

                                                            if(in_array("interview", $b))
                                                            {
                                                                echo "checked";
                                                            }

                                                        ?>
                                                        
                                                        >
                                                        <label for="checkbox2">Interview Result </label>
                                                    </div>
                                                    <div class="form-group">
                                                        <input  type="checkbox"  name="req[]" value="valid_id"
                                                        <?php 

                                                            if(in_array("valid_id", $b))
                                                            {
                                                                echo "checked";
                                                            }

                                                        ?>
                                                        
                                                        >
                                                        <label for="checkbox2"> Validated School ID </label>
                                                    </div>
                                                    <div class="form-group">
                                                        <input  type="checkbox"  name="req[]" value="cogm"
                                                        <?php 

                                                            if(in_array("cogm", $b))
                                                            {
                                                                echo "checked";
                                                            }

                                                        ?>
                                                        
                                                        >
                                                        <label for="checkbox2"> Certificate of Good Moral </label>
                                                    </div>
                                                    <div class="form-group">
                                                        <input  type="checkbox"  name="req[]" value="cog"
                                                        <?php 

                                                            if(in_array("cog", $b))
                                                            {
                                                                echo "checked";
                                                            }
                                                        ?>
                                                        
                                                        
                                                        >
                                                        <label for="checkbox2">Certificate of Grades </label>
                                                    </div>
                                                    <div class="form-group">
                                                        <input  type="checkbox"  name="req[]" value="la" 
                                                        <?php 

                                                            if(in_array("la", $b))
                                                            {
                                                                echo "checked";
                                                            }

                                                        ?>>
                                                        <label for="checkbox2">At least One(1) Leadership Seminar Attended/PSLDP </label>
                                                    </div>


                                            </div>

                                            <div class="form-row">
                                                
                                                <button type="submit" name="update_info" class="btn btn-primary m-r-5">Update Information</button>
                                                <a class="btn btn-default m-r-5" href="candidates.php">Cancel</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                               
                                
                               
                            </div>
                            <?php
                                }
                                    }else{
                                ?>
                                <h4>No ID FOUND</h4>
                                <?php

                                }
                            ?>
                        </div>
            </div>
      </div>
                <!-- Content Wrapper END -->    
</div>

    

<?php  include ('layouts/scripts.php'); ?>

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