<?php

include ('server/servers.php');
include ('header.php');

include ('side-nav.php');
?>

<!-- Page Container START -->
    <div class="page-container">

        <!-- Content Wrapper START -->
            <div class="main-content">
                <div class="page-header">
                    <h2 class="header-title">Add Users</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                <a href="#" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Home</a>
                                <a class="breadcrumb-item" href="add_department.php">Add User</a>
                                <a class="breadcrumb-item" href="admin/user.php">User</a>
                            </nav>
                        </div>
                    </div>
                    <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Users Infomation</h4>
                                    </div>
                                    <div class="card-body">
                                    <?php if(isset($_SESSION['message'])): ?>
                                        <div class="alert alert-success-<?php echo $_SESSION['success']; ?> <?= $_SESSION['success']=='danger' ? 'bg-danger text-light' : null ?>" role="alert">
                                            <?php echo $_SESSION['message']; ?>
                                        </div>
                                    <?php unset($_SESSION['message']); ?>
                                    <?php endif ?>
                                        <form method="post" action="model/save_user.php">
                                                <div class="form-row">
                                                    <div class="form-group col-md-2">
                                                        <label class="font-weight-semibold" for="">User ID:</label>
                                                        <input type="text" class="form-control" name="user_id" required>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-9">
                                                        <label class="font-weight-semibold" for="">First Name:</label>
                                                        <input type="text" class="form-control" name="firstname" required>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-9">
                                                        <label class="font-weight-semibold" for="">Last Name:</label>
                                                        <input type="text" class="form-control" name="lastname" required>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-9">
                                                        <label class="font-weight-semibold" for="">Password:</label>
                                                        <input type="password" class="form-control" name="pass" required>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-9">
                                                        <label class="font-weight-semibold" for="">Confirmation Password:</label>
                                                        <input type="password" class="form-control" name="cpass" required>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                <div  class="form-group col-md-2">
                                                    <label>User Type</label>
                                                        <select class="form-control" id="pillSelect" required name="role_as">
                                                            <option disabled selected>Select User Type</option>
                                                            <option value="admin">Admin</option>
                                                            <option value="adviser">Adviser</option>
                                                            <option value="officer">Officer</option>
                                                        </select>
                                                </div>
                                                </div>
                                                <div class="form-row">
                                                <button type="submit" class="btn btn-primary m-r-5">Add Users</button>
                                                <a class="btn btn-default m-r-5" href="view_account.php">Cancel</a>
                                                </div>
                                        </form>
                                    </div>
                                </div>
                        <!-- Content goes Here -->
                </div>
                    <!-- Content Wrapper END -->
                    
<?php
include ('footer.php');
?>
            </div>
                <!-- Page Container END -->
        </div>
</div>

 <!-- Core Vendors JS -->
 <script src="assets/js/vendors.min.js"></script>

    <!-- page js -->
    <link href="assets/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">

    <!-- Core JS -->
    <script src="assets/js/app.min.js"></script>
    <script src="assets/vendors/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/vendors/datatables/dataTables.bootstrap.min.js"></script>

</body>

</html>