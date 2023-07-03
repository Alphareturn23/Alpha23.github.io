<?php 
include 'server/servers.php';
include 'layouts/header.php';
include 'layouts/sidebar.php';

$id = $_GET['id'];

$sql ="SELECT * FROM tbl_users WHERE id = '$id'";
$result = $conn->query($sql);

if ($result-> num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $student_id = $row['accounts_id'];
        $fname = $row['firstname'];
        $lname = $row['lname'];
        
    }
}
?>

   <!-- Page Container START -->
   <div class="page-container">
                <!-- Content Wrapper START -->
     <div class="main-content">
                    <div class="page-header no-gutters has-tab">
                        <h2 class="font-weight-normal">Setting</h2>
                        <ul class="nav nav-tabs" >
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tab-account">Account</a>
                            </li>
                           
                        </ul>
                    </div>
                    <form action="proc/update_profile.php" method="POST">
                        <div class="container">
                        <div class="tab-content m-t-15">
                            <div class="tab-pane fade show active" id="tab-account" >
                            <?php if(isset($_SESSION['message'])): ?>
                                        <div class="alert alert-success-<?php echo $_SESSION['success']; ?> <?= $_SESSION['success']=='danger' ? 'bg-danger text-light' : null ?>" role="alert alert-primary">
                                            <?php echo $_SESSION['message']; ?>
                                        </div>
                                    <?php unset($_SESSION['message']); ?>
                                    <?php endif ?>
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Account Infomation</h4>
                                    </div>
                                        <div class="card-body">
                                            <div class="form-row">
                                                <div class="form-group col-md-2">
                                                    <label class="font-weight-semibold" >Student ID:</label>
                                                    <input type="text" class="form-control" name="student_id" placeholder="Student ID" readonly value="<?= $_SESSION['user_id'] ?>">
                                                </div>
                                                <div class="form-group col-md-5">
                                                    <label class="font-weight-semibold">First Name</label>
                                                    <input type="text" class="form-control"  name="firstname" placeholder="First Name" value="<?= $_SESSION['firstname'] ?>">
                                                </div>
                                                <div class="form-group col-md-5">
                                                    <label class="font-weight-semibold" >Last Name</label>
                                                    <input type="text" class="form-control" name="lastname" placeholder="Last Name" value="<?= $_SESSION['lastname'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="card">
                              <div class="card-header">
                                  <h4 class="card-title">Change Password</h4>
                              </div>
                              <div class="card-body">
                                      <div class="form-row">
                                          <div class="form-group col-md-3">
                                              <label class="font-weight-semibold" for="oldPassword">Current  Password:</label>
                                              <input type="password" class="form-control" id="oldPassword" name="cur_pass"   placeholder="Current Password">
                                          </div>
                                          <div class="form-group col-md-3">
                                              <label class="font-weight-semibold" for="newPassword">New Password:</label>
                                              <input type="password" class="form-control" id="newPassword" name="new_pass" placeholder="New Password">
                                          </div>
                                          <div class="form-group col-md-3">
                                              <label class="font-weight-semibold" for="confirmPassword">Confirm Password:</label>
                                              <input type="password" class="form-control" id="confirmPassword" name="confirm_pass" placeholder="Confirm Password">
                                          </div>
                                          
                                      </div>
                                  
                              </div>
                            </div>
                          <div class="form-group col-md-3">
                                <button type="submit" class="btn btn-primary m-t-30" >Update Profile</button>
                          </div>
                        </div>
                        </div>
                    </form>
     </div>
    <!-- Content Wrapper END -->

     <!-- Footer START -->
         <?php 
         include 'layouts/footer.php';
         ?>
     <!-- Footer END -->

 </div>
            <!-- Page Container END -->



<?php 
include 'layouts/scripts.php';
?>