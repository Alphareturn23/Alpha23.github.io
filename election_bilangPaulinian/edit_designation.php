<?php
include ('server/servers.php');
include ('layouts/header.php');
include ('layouts/sidebar.php');
include 'get_code.php';



$id = $_GET['id'];

$sql = "select * from designation where dsn_id= '$id'";
$result = $conn->query($sql);

if ($result->num_rows >0) {
    while ($row = $result->fetch_assoc()) {
        $desc = $row['description'];
        
    }
}


$query = "SELECT * FROM departments";
$result = $conn->query($query);

$dept = array();
while($row = $result->fetch_assoc()){
    $dept[] = $row; 
}
?>


<!-- Page Container START -->
    <div class="page-container">

        <!-- Content Wrapper START -->
            <div class="main-content">
                <div class="page-header">
                    <h2 class="header-title">Edit Designation</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                            </nav>
                        </div>
                    </div>
                    <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Designation Infomation</h4>
                                    </div>
                                    <div class="card-body">
                                    <?php if(isset($_SESSION['message'])): ?>
                                        <div class="alert alert-success-<?php echo $_SESSION['success']; ?> <?= $_SESSION['success']=='danger' ? 'bg-danger text-light' : null ?>" role="alert alert-primary">
                                            <?php echo $_SESSION['message']; ?>
                                        </div>
                                    <?php unset($_SESSION['message']); ?>
                                    <?php endif ?>
                                    <form method="post" action="proc/edit_designation.php?id=<?= $id ?>">
                                            <div class="form-row">
                                            <div class="form-group col-md-6">
                                                    <label class="font-weight-semibold" for="">Department:</label>
                                                    <select id="" class="form-control" name="dept" required>
                                                    <option disabled selected>Select Department Code</option>
                                                    <?php
                                                        
                                                            $sql = "select * from departments where dept_id";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows >0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                            ?>
                                                                <option value="<?= $row['dept_id'] ?>">
                                                                <?= $row['dept_code'] ?>
                                                                </option>
                                                            <?php
                                                                }
                                                            }
                                                            ?>
                                                    </select>
                                                </div>
                                                
                                            </div>
                                            <div class="form-group col-md-9">
                                                    <label class="font-weight-semibold" for="">Designation:</label>
                                                    <input type="text" class="form-control" value= "<?=$desc ?>" name="desc" required>
                                                </div>
                                            <div class="form-row">
                                            <button type="submit" class="btn btn-primary m-r-5">Edit Designation</button>
                                            <a class="btn btn-default m-r-5" href="view_designation.php">Cancel</a>
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
<?php include('layouts/scripts.php'); ?>
</body>

</html>