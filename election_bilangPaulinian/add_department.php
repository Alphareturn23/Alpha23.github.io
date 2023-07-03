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
                    <h2 class="header-title">Add Department</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                            </nav>
                        </div>
                    </div>
                    <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Department Infomation</h4>
                                    </div>
                                    <div class="card-body">
                                    <?php if(isset($_SESSION['message'])): ?>
                                        <div class="alert alert-success-<?php echo $_SESSION['success']; ?> <?= $_SESSION['success']=='danger' ? 'bg-danger text-light' : null ?>" role="alert alert-primary">
                                            <?php echo $_SESSION['message']; ?>
                                        </div>
                                    <?php unset($_SESSION['message']); ?>
                                    <?php endif ?>
                                    <form method="post" action="proc/save_department.php">
                                            <div class="form-row">
                                                <div class="form-group col-md-9">
                                                    <label class="font-weight-semibold" for="">Department Code:</label>
                                                    <input type="text" class="form-control" name="dept_code" required>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-9">
                                                    <label class="font-weight-semibold" for="">Department Title:</label>
                                                    <input type="text" class="form-control" name="dept_title" required>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                            <button type="submit" class="btn btn-primary m-r-5">Add Department</button>
                                            <a class="btn btn-default m-r-5" href="view_department.php">Cancel</a>
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