<!-- Side Nav START -->

<?php if(isset($_SESSION['user_id']) && $_SESSION['role']=='Admin'): ?>   
    <div class="side-nav">
                    <div class="side-nav-inner">
                        <ul class="side-nav-menu scrollable">
                            <li class="nav-item dropdown">
                                <a href="dashboard.php">
                                    <span class="icon-holder">
                                        <i class="anticon anticon-home"></i>
                                    </span>
                                    <span class="title">Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle" href="javascript:void(0);">
                                    <span class="icon-holder">
                                        <i class="anticon anticon-user"></i>
                                    </span>
                                    <span class="title">Students</span>
                                    <span class="arrow">
                                        <i class="arrow-icon"></i>
                                    </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="view_students.php">View Student</a>
                                    </li>
                                    <li>
                                        <a href="add_students.php">Add Student</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle" href="javascript:void(0);">
                                    <span class="icon-holder">
                                        <i class="anticon anticon-file"></i>
                                    </span>
                                    <span class="title">Requirements</span>
                                    <span class="arrow">
                                        <i class="arrow-icon"></i>
                                    </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="view_requirements.php">View Requirements</a>
                                    </li>
                                    <li>
                                        <a href="add_requirements.php">Add Requirements</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle" href="javascript:void(0);">
                                    <span class="icon-holder">
                                        <i class="anticon anticon-team"></i>
                                    </span>
                                    <span class="title">Candidates</span>
                                    <span class="arrow">
                                        <i class="arrow-icon"></i>
                                    </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="candidates.php">List of Candidates</a>
                                    </li>
                                    <li>
                                        <a href="candidates_withdraw.php">Candidates Withdraw</a>
                                    </li>

                                    <li>
                                        <a href="add_candidates.php">Add Candidate</a>
                                    </li>
                                   
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle" href="javascript:void(0);">
                                    <span class="icon-holder">
                                        <i class="anticon anticon-idcard"></i>
                                    </span>
                                    <span class="title">Position</span>
                                    <span class="arrow">
                                        <i class="arrow-icon"></i>
                                    </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="view_position.php">View Position</a>
                                    </li>
                                    <li>
                                        <a href="add_position.php">Add Position</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle" href="javascript:void(0);">
                                    <span class="icon-holder">
                                        <i class="anticon anticon-profile"></i>
                                    </span>
                                    <span class="title">Designation</span>
                                    <span class="arrow">
                                        <i class="arrow-icon"></i>
                                    </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="view_designation.php">View Designation</a>
                                    </li>
                                    <li>
                                        <a href="add_designation.php">Add Designation</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle" href="javascript:void(0);">
                                    <span class="icon-holder">
                                        <i class="anticon anticon-bank"></i>
                                    </span>
                                    <span class="title">Department</span>
                                    <span class="arrow">
                                        <i class="arrow-icon"></i>
                                    </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="view_department.php">View Department</a>
                                    </li>
                                    <li>
                                        <a href="add_department.php">Add Department</a>
                                    </li>
                                </ul>
                            </li>

                            



                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle" href="javascript:void(0);">
                                    <span class="icon-holder">
                                        <i class="anticon anticon-team"></i>
                                    </span>
                                    <span class="title">Users Management</span>
                                    <span class="arrow">
                                        <i class="arrow-icon"></i>
                                    </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="view_account.php">View Accounts</a>
                                    </li>
                                    <li>
                                        <a href="add_account.php">Add Accounts</a>
                                    </li>
                                </ul>
                              
                            </li>


                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle" href="javascript:void(0);">
                                    <span class="icon-holder">
                                        <i class="anticon anticon-setting"></i>
                                    </span>
                                    <span class="title">System</span>
                                    <span class="arrow">
                                        <i class="arrow-icon"></i>
                                    </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="backup/backup.php">Backup</a>
                                    </li>
                                    <li>
                                        <a href="#restore" data-toggle="modal">Restore</a>
                                    </li>
                                </ul>
                              
                            </li>
                        </ul>
                    </div>
    </div>
<?php endif ?>


<?php if(isset($_SESSION['user_id']) && $_SESSION['role']=='Comelec Chair'): ?>   
    <div class="side-nav">
                    <div class="side-nav-inner">
                        <ul class="side-nav-menu scrollable">
                            <li class="nav-item dropdown">
                                <a href="dashboard.php">
                                    <span class="icon-holder">
                                        <i class="anticon anticon-home"></i>
                                    </span>
                                    <span class="title">Dashboard</span>
                                </a>
                            </li>
                            
                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle" href="javascript:void(0);">
                                    <span class="icon-holder">
                                        <i class="anticon anticon-team"></i>
                                    </span>
                                    <span class="title">Candidates</span>
                                    <span class="arrow">
                                        <i class="arrow-icon"></i>
                                    </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="candidates.php">List of Candidates</a>
                                    </li>
                                    <li>
                                        <a href="candidates_withdraw.php">Candidates Withdraw</a>
                                    </li>
                                    <li>
                                        <a href="add_candidates.php">Add Candidate</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
    </div>
<?php endif ?>


<?php if(isset($_SESSION['user_id']) && $_SESSION['role']=='Commissioner'): ?>   
    <div class="side-nav">
                    <div class="side-nav-inner">
                        <ul class="side-nav-menu scrollable">
                            <li class="nav-item dropdown">
                                <a href="dashboard.php">
                                    <span class="icon-holder">
                                        <i class="anticon anticon-home"></i>
                                    </span>
                                    <span class="title">Dashboard</span>
                                </a>
                            </li>
                            
                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle" href="javascript:void(0);">
                                    <span class="icon-holder">
                                        <i class="anticon anticon-team"></i>
                                    </span>
                                    <span class="title">Candidates</span>
                                    <span class="arrow">
                                        <i class="arrow-icon"></i>
                                    </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="candidates.php">List of Candidates</a>
                                    </li>
                                    <li>
                                        <a href="candidates_withdraw.php">Candidates Withdraw</a>
                                    </li>
                                    <li>
                                        <a href="add_candidates.php">Add Candidate</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
    </div>
<?php endif ?>















<?php if(isset($_SESSION['user_id']) && $_SESSION['role']=='User'): ?>   
    <div class="side-nav">
                    <div class="side-nav-inner">
                        <ul class="side-nav-menu scrollable">
                            <li class="nav-item dropdown">
                                <a href="dashboard.php">
                                    <span class="icon-holder">
                                        <i class="anticon anticon-home"></i>
                                    </span>
                                    <span class="title">Dashboard</span>
                                </a>
                            </li>
                            
                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle" href="javascript:void(0);">
                                    <span class="icon-holder">
                                        <i class="anticon anticon-team"></i>
                                    </span>
                                    <span class="title">Candidates</span>
                                    <span class="arrow">
                                        <i class="arrow-icon"></i>
                                    </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="view_candidates.php">List of Candidates</a>
                                    </li>
                                    <li>
                                        <a href="candidates_withdraw.php">Candidates Withdraw</a>
                                    </li>
                                    <li>
                                        <a href="add_candidates.php">Add Candidates</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle" href="javascript:void(0);">
                                    <span class="icon-holder">
                                        <i class="anticon anticon-idcard"></i>
                                    </span>
                                    <span class="title">Position</span>
                                    <span class="arrow">
                                        <i class="arrow-icon"></i>
                                    </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="view_position.php">View Position</a>
                                    </li>
                                    <li>
                                        <a href="add_position.php">Add Position</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle" href="javascript:void(0);">
                                    <span class="icon-holder">
                                        <i class="anticon anticon-profile"></i>
                                    </span>
                                    <span class="title">Designation</span>
                                    <span class="arrow">
                                        <i class="arrow-icon"></i>
                                    </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="view_designation.php">View Designation</a>
                                    </li>
                                    <li>
                                        <a href="add_designation.php">Add Designation</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle" href="javascript:void(0);">
                                    <span class="icon-holder">
                                        <i class="anticon anticon-bank"></i>
                                    </span>
                                    <span class="title">Department</span>
                                    <span class="arrow">
                                        <i class="arrow-icon"></i>
                                    </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="view_department.php">View Department</a>
                                    </li>
                                    <li>
                                        <a href="add_department.php">Add Department</a>
                                    </li>
                                </ul>
                            </li>



                          
                        </ul>
                    </div>
    </div>
<?php endif ?>
<!-- Side Nav END -->
