<?php
include ('server/servers.php');
include ('layouts/header.php');
include ('layouts/sidebar.php');


$id = $_GET['id'];


$query = "SELECT * from requirements WHERE id= '$id'";
$result = $conn->query($query);

if ($result->num_rows >0) {
    while ($row = $result->fetch_assoc()) {
        $name = $row['name'];
      }
  }



?>


<!-- Page Container START -->
    <div class="page-container">

        <!-- Content Wrapper START -->
            <div class="main-content">
                <div class="page-header">
                    <h2 class="header-title">Edit Requirements</h2> 
                        <div class="header-sub-title">
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Requirements Infomation</h4>
                        </div>
                        <div class="card-body">
                        <?php if(isset($_SESSION['message'])): ?>
                            <div class="alert alert-success-<?php echo $_SESSION['success']; ?> <?= $_SESSION['success']=='danger' ? 'bg-danger text-light' : null ?>" role="alert alert-primary">
                                <?php echo $_SESSION['message']; ?>
                            </div>
                        <?php unset($_SESSION['message']); ?>
                        <?php endif ?>
                            <form method="post" action="proc/edit_requirements.php?id=<?= $id ?>">
                            <div class="form-row">
                    <div class="form-group col-md-4">
                            <label class="font-weight-semibold" for="">Name:</label>
                            <input type="text" class="form-control" value="<?=$name?>" name="name" id="student_id" autocomplete="off" >
                            <span id="result"></span>
                    </div>
                    
                </div>

                
                <div class="form-row">
                    <button type="submit" class="btn btn-primary m-r-5">Update Requirements</button>
                    <a class="btn btn-default m-r-5" href="view_requirements.php">Cancel</a>
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