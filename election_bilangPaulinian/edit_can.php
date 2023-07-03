<?php

include ('server/servers.php');
include ('layouts/header.php');
include ('layouts/sidebar.php');

$id = $_GET['id'];
$dsn_id = $_GET['dsn_id'];
$position_id = $_GET['position_id'];

    $sql = "select * from candidates where candidates_id= '$id'";
    $result = $conn->query($sql);

    if ($result->num_rows >0) {
        while ($row = $result->fetch_assoc()) {
            $picture = $row['picture'];
            $student_id = $row['student_id'];
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

    if ($result->num_rows >0) {
        while ($row = $result->fetch_assoc()) {
            $position_title = $row['position_title'];
            $position_id = $row['position_id'];
        }
    }



?>



<!-- Page Container START -->
    <div class="page-container">

        <!-- Content Wrapper START -->
            <div class="main-content">
                <div class="page-header">
                    <h2 class="header-title">Edit Candidates</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                            </nav>
                        </div>
                    </div>
                    <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Candidate Infomation</h4>
                                    </div>
                                    <div class="card-body">
                                    <?php if(isset($_SESSION['message'])): ?>
                                        <div class="alert alert-success-<?php echo $_SESSION['success']; ?> <?= $_SESSION['success']=='danger' ? 'bg-danger text-light' : null ?>" role="alert alert-primary">
                                            <?php echo $_SESSION['message']; ?>
                                        </div>
                                    <?php unset($_SESSION['message']); ?>
                                    <?php endif ?>
                                        <hr class="m-v-25">
                                        <form method="POST" name="myForm" action="proc/edit_candidate.php?id=<?= $id ?>" enctype="multipart/form-data">
                                        <div class="media align-items-center">
                                            <div class="avatar avatar-image  m-h-10 m-r-15" style="height: 80px; width: 80px">
                                                <img src="uploads/candidates/<?= $picture ?>" alt="">
                                            </div>
                                            <div class="m-l-20 m-r-20">
                                                <h5 class="m-b-5 font-size-18">Candidate Portrait</h5>
                                                <p class="opacity-07 font-size-13 m-b-0">
                                                    Recommended Dimensions: <br>
                                                    800x800 Max fil size: 1MB
                                                </p>
                                            </div>
                                            <div>
                                                <input type="hidden" class="form-control"  name="old_image" value="<?= $picture ?>">
                                                <input type="file" class="form-control btn btn-tone" name="image">
                                            </div>
                                        </div>
                                            <div class="form-row">
                                            <div class="form-group col-md-4">
                                                    <label class="font-weight-semibold" for="userName">Student ID:</label>
                                                    <input type="text" required value="<?=$student_id?>" class="form-control"autocomplete="new-password" name="student_id" id="student_id" >
                                                        <div id="result"></div>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label class="font-weight-semibold" for="">Designation:</label>
                                                    <select class="form-control" name="desc"  id="designation" required >
                                                        <option value="" selected disabled><?=$description;?></option>
                                                        <?php
                                                           
                                                            $sql = "select * from designation";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows >0) {
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
                                                    <select id="title" class="form-control" name="position"  required>
                                                    <option value="" selected disabled><?=$position_title;?></option>   
                                                     
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                            <button type="submit" class="btn btn-primary m-r-5">Update Candidates</button>
                                            <a class="btn btn-default m-r-5" href="view_candidates.php">Cancel</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                        <!-- Content goes Here -->
                </div>
                    <!-- Content Wrapper END -->
                    
<?php
include ('layouts/footer.php');
?>
            </div>
                <!-- Page Container END -->
        </div>
</div>

    
<?php
include ('layouts/scripts.php');
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