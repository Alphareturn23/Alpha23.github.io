<?php
include('server/servers.php');
include('layouts/header.php');
include('layouts/sidebar.php');
include('get_code.php');

$query = "SELECT * FROM tbl_departments";
$result = $conn->query($query);

$dept = array();
while ($row = $result->fetch_assoc()) {
    $dept[] = $row;
}


?>


<!-- Page Container START -->
<div class="page-container">

    <!-- Content Wrapper START -->
    <div class="main-content">
        <div class="page-header">
            <h2 class="header-title">Add Requirements</h2>
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
            <form method="POST" name="myForm" action="proc/save_require.php" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="form-group col-md-6">
                            <label class="font-weight-semibold" for="">Name:</label>
                            <input type="text" class="form-control" placeholder="Enter Name" name="name" required>
                    </div>
                    

                

                   

                   
                </div>
                <div class="form-row">
                    <button type="submit" class="btn btn-primary m-r-5">Add Requirements</button>
                    <a class="btn btn-default m-r-5" href="view_students.php" >Cancel</a>
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
<?php
    include('layouts/scripts.php');
?>
<!-- page js -->



</body>

</html>