<?php
include ('server/servers.php');
include ('layouts/header.php');
include ('layouts/side-nav.php');
include 'get_code.php';

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
                    <h2 class="header-title">Add Designation</h2>
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
                                    <form method="post" action="proc/save_designation.php">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label class="font-weight-semibold" for="">Department Title:</label>
                                                    <select id="" class="form-control" name="dept" required>
                                                    <option disabled selected>Select Department Title</option>
                                                    <?php
                                                        
                                                            $sql = "select * from departments where dept_id";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows >0) {
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
                                            </div>
                                            <div class="form-group col-md-9">
                                                    <label class="font-weight-semibold" for="">Designation:</label>
                                                    <input type="text" class="form-control" name="descrip" required>
                                                </div>
                                            
                                            <div class="form-row">
                                            <button type="submit" class="btn btn-primary m-r-5">Add Designation</button>
                                            <button class="btn btn-default m-r-5" href="view_designation.php">Cancel</href=></button>
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
</body>

</html>