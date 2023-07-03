<?php 

include 'server/servers.php';
include 'layouts/header.php';
include 'layouts/sidebar.php';


$id = $_GET['id'];
$ids = $_GET['id'];
$dsn_id = $_GET['dsn_id'];
$student_id = $_GET['id'];
$position_id = $_GET['position_id'];

    $sql = "select * from candidates where candidates_id= '$id'";
    $result = $conn->query($sql);

    if ($result->num_rows >0) {
        while ($row = $result->fetch_assoc()) {
            $picture = $row['picture'];
            $student = $row['student_id'];
            $desc = $row['dsn_id'];
            $position = $row['position_id'];
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
    $b = explode(",", $req);

   
    

?>

 <!-- Page Container START -->
 <div class="page-container">
                

     <!-- Content Wrapper START -->
    <div class="main-content">
                    <div class="page-header">
                        <h2 class="header-title">Profile</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                <a href="#" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Dashboard</a>
                                <a class="breadcrumb-item" href="candidates.php">Candidates</a>
                                <span class="breadcrumb-item active">Profile</span>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-20 text-right">

                        <a href="edit_candidates.php?id=<?= $id ?>"> <button class="btn btn-primary" data-toggle="modal" data-target="#create-new-project">
                            <i class="anticon anticon-plus-circle"></i>
                            <span>Edit Profile</span>
                            </button>
                        </a>
                    </div>
                    <br>
                    <div class="container">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-md-7">
                                        <div class="d-md-flex align-items-center">
                                            <div class="text-center text-sm-left ">
                                                <div class="avatar avatar-image" style="width: 150px; height:150px">
                                                    <img src="uploads/candidates/<?= $picture ?>" alt="">
                                                </div>
                                            </div>
                                            <div class="text-center text-sm-left m-v-15 p-l-30">
                                                <h2 class="m-b-5"><?=  $lname .', '. $fname ?></h2>
                                                <p class="text-opacity font-size-14"><?= $student ?></p>
                                                <p class="text-opacity font-size-15"><?= $course . '-'. $year ?></p>
                                                <p class="text-opacity font-size-15"><?= $dept_title ?></p>
                                                <p class="font-weight-semibold"> <?php echo  "Candidates:  ".  $position_title .'   - '. $description ?></p>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="row">
                                            <div class="d-md-block d-none border-left col-1"></div>
                                            <div class="col">
                                                <img src="assets/images/logo/SPUP.png"  style="max-width: 130px;">
                                                <img src="assets/images/logo/commission.jpg" class="img-fluid" width="200px">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                           
                            <div class="col-md-4">
                               
                                <div class="card">
                                    <div class="card-body">
                                        <h5>REQUIREMENTS</h5>
                                        <hr>
                                        <div class="m-t-20">
                                            <div class="m-b-20 p-b-20 border-bottom">
                                                <div class="media-body m-l-20">
                                                     <h5 class="m-b-0">
                                                     <input type="checkbox" name="req[]" disabled="" 
                                                     value="comelec"
                                                        <?php 

                                                        if(in_array("comelec",$b))
                                                        {
                                                            echo "checked";
                                                        }
                                                        
                                                        ?>
                                                     
                                                     
                                                     
                                                     >
                                                     Comelec Slip
                                                       
                                                    </h5>
                                                </div>
                                                <hr>

                                                <div class="media-body m-l-20">
                                                     <h5 class="m-b-0">
                                                     <input type="checkbox" name="req[]" disabled=""
                                                     value="picture"
                                                        <?php 

                                                        if(in_array("picture",$b))
                                                        {
                                                            echo "checked";
                                                        }
                                                        
                                                        ?>
                                                     >
                                                     2 by 2 picture with name
                                                      
                                                    </h5>
                                                </div>
                                                <hr>
                                                <div class="media-body m-l-20">
                                                    <h5 class="m-b-0">
                                                    <input type="checkbox" name="req[]" disabled=""
                                                    value="coc"
                                                        <?php 

                                                        if(in_array("coc",$b))
                                                        {
                                                            echo "checked";
                                                        }
                                                        
                                                        ?>
                                                     >
                                                    Certificate of Candidacy Form
                                                     
                                                    </h5>
                                                </div>
                                                <hr>

                                                <div class="media-body m-l-20">
                                                     <h5 class="m-b-0">
                                                     <input type="checkbox" name="req[]" disabled=""
                                                     
                                                     value="recom"
                                                        <?php 

                                                        if(in_array("recom",$b))
                                                        {
                                                            echo "checked";
                                                        }
                                                        
                                                        ?>
                                                     
                                                     >
                                                     Recommendation Letter
                                                      
                                                    </h5>
                                                </div>
                                                <hr>

                                                
                                                <div class="media-body m-l-20">
                                                   
                                                    <h5 class="m-b-0">
                                                    <input type="checkbox" name="req[]" disabled=""
                                                    value="interview"
                                                        <?php 

                                                        if(in_array("interview",$b))
                                                        {
                                                            echo "checked";
                                                        }
                                                        
                                                        ?>
                                                     >
                                                        Interview Result
                                                         
                                                    </h5>
                                                </div>
                                                <hr>

                                                <div class="media-body m-l-20">
                                                        <h5 class="m-b-0">
                                                        <input type="checkbox" name="req[]" disabled=""
                                                        value="valid_id"
                                                        <?php 

                                                        if(in_array("valid_id",$b))
                                                        {
                                                            echo "checked";
                                                        }
                                                        
                                                        ?>
                                                     >
                                                        Validated School ID
                                                            
                                                        </h5>
                                                </div>
                                                <hr>

                                                <div class="media-body m-l-20">
                                                        <h5 class="m-b-0">
                                                        <input type="checkbox" name="req[]" disabled=""
                                                        value="cogm"
                                                        <?php 

                                                        if(in_array("cogm",$b))
                                                        {
                                                            echo "checked";
                                                        }
                                                        
                                                        ?>
                                                     >
                                                        Certificate of Good Moral
                                                          
                                                        </h5>
                                                </div>
                                                <hr>

                                                <div class="media-body m-l-20">
                                                        <h5 class="m-b-0">
                                                        <input type="checkbox" name="req[]" disabled=""
                                                        value="cog"
                                                        <?php 

                                                        if(in_array("cog",$b))
                                                        {
                                                            echo "checked";
                                                        }
                                                        
                                                        ?>
                                                     >
                                                            Certificate of Grades
                                                            
                                                        </h5>
                                                </div>
                                                <hr>

                                                <div class="media-body m-l-20">
                                                        <h5 class="m-b-0">
                                                        <input type="checkbox" name="req[]" disabled=""
                                                        value="la"
                                                        <?php 

                                                        if(in_array("la",$b))
                                                        {
                                                            echo "checked";
                                                        }
                                                        
                                                        ?>
                                                     >
                                                     At least One(1) Leadership Seminar Attended/PSLDP
                                                           
                                                        </h5>
                                                </div>
                                             
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   




                    

                   
    </div>
    <!-- Content Wrapper END -->

    <!-- Footer START -->
    <footer class="footer">
        <?php include 'layouts/footer.php'?>          
    </footer>
                <!-- Footer END -->

</div>
            <!-- Page Container END -->
<?php include 'layouts/scripts.php'?>    