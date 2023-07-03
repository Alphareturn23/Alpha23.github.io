<?php
include 'server/servers.php';
include 'layouts/header.php';
include 'layouts/sidebar.php';



?>

<?php
    $id = $_GET['id'];
    $dsn_id = $_GET['dsn_id'];
$student_id = $_GET['id'];
$position_id = $_GET['position_id'];
    $query = "SELECT * FROM candidates WHERE candidates_id='$id'";
    $result = $conn->query($query);
    $can = $result->fetch_assoc();




    $query = "SELECT * FROM candidates 
    INNER JOIN students ON candidates.student_id = students.student_id 
    INNER JOIN tbl_departments ON students.dept_id = tbl_departments.dept_id
    WHERE candidates.candidates_id = '$id'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $fname = $row['fname'];
            $lname = $row['lname'];
            $student_id = $row['student_id'];
            $dept_title = $row['dept_title'];
            $course = $row['course'];
            $year = $row['year'];
            $req = $row['requirements'];
            
        }
    }

    $sql1 = "select * from designation where dsn_id= '$dsn_id'";
    $result = $conn->query($sql1);

    if ($result->num_rows >0) {
        while ($row = $result->fetch_assoc()) {
            $description = $row['description'];
            $designation_id = $row['dsn_id'];
        }
    }

    $sql2 = "select * from positions where position_id= '$position_id'";
    $result = $conn->query($sql2);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $position_title = $row['position_title'];
            $position_id = $row['position_id'];
        }
    }
    $b = explode(",", $req);


?>

 
 <!-- Page Container START -->
 <div class="page-container">

    <!-- Content Wrapper START -->
    <div class="main-content">
        <div class="card">
                        <div class="card-header">
							<div class="card-head-row">
								<div class="card-title">Candidates Profile</div>
								<div class="col-lg-20 text-right">
									<button class="btn btn-primary btn-border btn-round btn-sm" onclick="printDiv('printThis')">
												<i class="fa fa-print"></i>
												Print Profile
									</button>
								</div>
							</div>
						</div>

                        <div class="card-body m-5" id="printThis">
                            <div class="d-flex flex-wrap justify-content-around" style="border-bottom:5px solid yellow " >
                           
                                
                                <div class="text-center">
                                    <img src="assets/images/logo/SPUP.png" class="img-fluid" width="110px">
								</div>
								<div class="text-center">
                                <h2  class="spup">St. Paul University Philippines</h2>
                                    <h5 class="h5 font-weight-light">Tuguegarao City, Cagayan 3500</h5> <br>
									<h2 class="h5 font-weight-semibold">STUDENTS AFFIARS AND ACADEMIC SUPPORT SERVICES</h2>
									<h1 class="h5 font-weight-bold">THE PAULINIAN STUDENT GOVERNMENT</i></h2> <br>
                                    
								</div>
                                 <div class="text-center">
                                    <img src="assets/images/logo/commission.jpg" class="img-fluid" width="180px" style="margin-top:-35px;">
								</div>
							</div>
                            <hr style="border-bottom:5px solid green; margin-top:2px; margin-bottom: -40px;" >
                            <br> <br>
                            
                            <div class="row mt-2">
                                <div class="col-md-3">
                                    <div class="text-center p-1" style="border:1px solid black">
                                        <img src="<?= preg_match('/data:image/i', $can['picture']) ? $can['picture'] : 'uploads/candidates/'.$can['picture'] ?>" alt="Resident Profile" class="img-fluid">
                                    </div>
                                </div>
                                <div class="row">
                                
                                    <div class="col">
                                        &nbsp;<h2 class="m-b-5"><?=  $lname .', '. $fname ?></h2>
                                        <h5 class="h5 font-weight-bold"><?= $can['student_id'] ?></h5>
                                        <h5 class=" h5 font-weight-normal"><?= $course . '-'. $year ?></h5>
                                        <h4 class="text-opacity font-size-16"><?= $dept_title ?></h4>
                                       
                                        <h5 class="h5 font-weight-semibold"><?php echo  "Candidate:  ".  $position_title .'   - '. $description ?></h5>
                                    </div>
                                </div>
                            </div>
                            <br> <br>
                            <div class="col-md-9">
                                
                                <div class="form-group">
                                    <label for="">Requirements</label>
                                    <br> <br>
                                    <div class="form-group">
                                                            <input  type="checkbox" name="req[]" disabled value="comelec"
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
                                                            <input  type="checkbox"  name="req[]"  disabled value="picture"

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
                                                            <input  type="checkbox"  name="req[]"  disabled value="coc"

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
                                                            <input  type="checkbox"  name="req[]"  disabled value="recom"

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
                                                            <input  type="checkbox"  name="req[]"  disabled value="interview"
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
                                                            <input  type="checkbox"  name="req[]"  disabled value="valid_id"
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
                                                            <input  type="checkbox"  name="req[]"  disabled value="cogm"
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
                                                            <input  type="checkbox"  name="req[]" disabled value="cog"
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
                                                            <input  type="checkbox"  name="req[]"  disabled value="la" 
                                                            <?php 

                                                                if(in_array("la", $b))
                                                                {
                                                                    echo "checked";
                                                                }

                                                            ?>>
                                                            <label for="checkbox2">At least One(1) Leadership Seminar Attended/PSLDP </label>
                                    </div>
                                </div>
                            </div>
                                      
                        </div>
        </div>
    </div>
    <!-- Content Wrapper END -->

    <!-- Footer START -->
    <?php include 'layouts/footer.php'?>
    <!-- Footer END -->
</div>
            <!-- Page Container END -->
<?php include 'layouts/scripts.php'?>

