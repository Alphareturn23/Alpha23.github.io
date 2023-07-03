<?php
include ('server/servers.php');
include ('layouts/header.php');
include ('layouts/sidebar.php');

?>

<!-- Page Container START -->
    <div class="page-container">

        <!-- Content Wrapper START -->
            <div class="main-content">
                <div class="page-header">
                    <h2 class="header-title">Edit Users</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                <a href="#" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Home</a>
                                <a class="breadcrumb-item" href="add_department.php">Edit User</a>
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
                                    <?php 
                                        if(isset($_GET['id']))
                                        {
                                            $id = $_GET['id'];
                                            $sql = "SELECT * FROM accounts WHERE id = '$id'";
                                            $result = mysqli_query($conn, $sql);

                                            if (mysqli_num_rows($result) > 0) {
                                                $row = mysqli_fetch_array($result);
                                                ?>
                                                 <form method="POST" action="proc/edit_account.php?id=<?= $id ?>">
                                            <div class="form-row">
                                                <div class="form-group col-md-2">
                                                    <label class="font-weight-semibold" for="">User ID:</label>
                                                    <input type="text" class="form-control" name="user_id" value="<?= $row['account_id']?>" required>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-9">
                                                    <label class="font-weight-semibold" for="">First Name:</label>
                                                    <input type="text" class="form-control" name="firstname"  value="<?= $row['firstname']?>" required>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-9">
                                                    <label class="font-weight-semibold" for="">Last Name:</label>
                                                    <input type="text" class="form-control" name="lastname"   value="<?= $row['lastname']?>" required>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                               <div  class="form-group col-md-2">
                                                <label>User Type</label>
                                                    <select class="form-control" id="pillSelect" required name="role_as">
                                                        <option disabled selected>Select User Type</option>
                                                        <option value="Admin" <?= $row['role_as'] == 'Admin' ? 'selected' : ''?> >Admin</option>
                                                        <option value="User" <?= $row['role_as'] == 'User' ? 'selected' : ''?>>User</option>
                                                        <option value="Comelec Chair" <?= $row['role_as'] == 'Comelec Chair' ? 'selected' : ''?>>Comelec Chair</option>
                                                        <option value="Commissioner" <?= $row['role_as'] == 'Commissioner' ? 'selected' : ''?> >Commissioner</option>
                                                    </select>
                                               </div>
                                            </div>

                                            <div class="form-row">
                                            <button type="submit" class="btn btn-primary m-r-5">Update Users</button>
                                            <a class="btn btn-default m-r-5" href="view_account.php">Cancel</a>
                                            </div>
                                        </form>
                                        </div>
                                                <?php

                                            }
                                        }else{
                                            ?>
                                                <h4>No ID FOUND</h4>
                                            <?php
                                            
                                        }
                                    ?>
                                   
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