<?php
include ('server/servers.php');
include ('layouts/header.php');
include ('layouts/sidebar.php');
include 'get_code.php';
?>



<!-- Page Container START -->
    <div class="page-container">

        <!-- Content Wrapper START -->
            <div class="main-content">
                <div class="page-header">
                    <h2 class="header-title">Add Position</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                            </nav>
                        </div>
                    </div>
                    <div class="card">
                                    <div class="card-header">
                                    <?php if(isset($_SESSION['message'])): ?>
                                        <div class="alert alert-success-<?php echo $_SESSION['success']; ?> <?= $_SESSION['success']=='danger' ? 'bg-danger text-light' : null ?>" role="alert alert-primary">
                                            <?php echo $_SESSION['message']; ?>
                                        </div>
                                    <?php unset($_SESSION['message']); ?>
                                    <?php endif ?>
                                        <h4 class="card-title">Position Infomation</h4>
                                    </div>
                                    <div class="card-body">
                                    <form method="POST" action="proc/save_position.php" enctype="multipart/form-data">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label class="font-weight-semibold" for="">Designation:</label>
                                                    <select id="" class="form-control" name="descrip" required>
                                                        
                                                    <option value="" selected>Select Designation</option>
                                                    <?php
                                                    $servername = "localhost";
                                                    $username = "root";
                                                    $password = "";
                                                    $dbname = "election";
                                                    $conn = new mysqli($servername, $username, $password, $dbname);
                                                    if ($conn->connect_error){
                                                        die ("Connection failed: " . $conn->connect_error);
                                                    }
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
                                                <div class="form-group col-md-6">
                                                    <label class="font-weight-semibold" for="">Position Title:</label>
                                                    <input type="text" class="form-control" name="position_title" required>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                            <button type="submit" class="btn btn-primary m-r-5">Add Position</button>
                                            <a class="btn btn-default m-r-5" href="view_position.php">Cancel</a>
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