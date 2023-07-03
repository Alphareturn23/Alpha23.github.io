<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <title>bilangpaulinian</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/bp.png">
    <!--  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>  -->
     <!-- <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>  -->
    <!-- Core css -->
    <link href="assets/css/app.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.min.css">

    <script src="assets/vendors/jquery-ui/jquery-ui.min.js"></script>

    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="asset/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="asset/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="asset/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="asset/dist/css/adminlte.min.css">

    <style>
        

        .spup {
            font-family: 'Old English Text MT';
            font-size: 30px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 5px;

        }

    </style>
</head>

<body>
    <div class="app">
        <div class="layout">
            <!-- Header START -->
            <div class="header">
                <div class="logo logo-dark">
                    <a href="dashboard.php">
                        <img style="width: 225px; height: auto; margin-top: 10px;"src="assets/images/logo/bilang.png" alt="Logo">
                        <img class="logo-fold" src="assets/images/logo/spup-fold.png" alt="Logo">
                    </a>
                </div>
                <div class="nav-wrap">
                    <ul class="nav-left">
                        <li class="desktop-toggle">
                            <a href="javascript:void(0);">
                                <i class="anticon"></i>
                            </a>
                        </li>
                        <li class="mobile-toggle">
                            <a href="javascript:void(0);">
                                <i class="anticon"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav-right">
                      
                        <li class="dropdown dropdown-animated scale-left">
                            <div class="pointer" data-toggle="dropdown">
                                <div class="avatar avatar-image  m-h-10 m-r-15">
                                    <img src="assets/images/person.png" alt="">
                                </div>
                            </div>
                            <div class="p-b-15 p-t-20 dropdown-menu pop-profile">
                                <div class="p-h-20 p-b-15 m-b-10 border-bottom">
                                        <div class="d-flex m-r-50">
                                            <div class="avatar avatar-lg avatar-image">
                                                <img src="assets/images/person.png" alt="">
                                            </div>&nbsp;
                                            <?php isset($_SESSION['user_id']) && $_SESSION['role']=='Admin' ? '#collapseExample' : 'javascript:void(0)' ?>
                                                <span>
                                                <?= isset($_SESSION['firstname'])  ? ucfirst($_SESSION['firstname']): 'Guest User' ?><br>
                                                    <span class="user-level"><?= isset($_SESSION['role']) ? ucfirst($_SESSION['role']) : 'Guest' ?></span>
                                                <?= isset($_SESSION['user_id']) && $_SESSION['role']=='Admin' ? '<span class="caret"></span>' : null ?> 
                                                </span>
                                        </div>
                                </div>
                                
                                <a href="edit_profile.php" class="dropdown-item d-block p-h-15 p-v-10" >
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <i class="anticon opacity-04 font-size-16 anticon-user"></i>
                                            <span class="m-l-10">Edit Profile</span>
                                        </div>
                                        <i class="anticon font-size-10 anticon-right"></i>
                                    </div>
                                </a>
                                <?php ?>
                               
                                <a href="proc/logout.php" class="dropdown-item d-block p-h-15 p-v-10">
                                    <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <?php if(isset($_SESSION['role'])):?>
                                            <i class="anticon opacity-04 font-size-16 anticon-logout"></i>
                                            <span class="m-l-10">Logout</span>
                                        </div>
                                        <i class="anticon font-size-10 anticon-right"></i>
                                        <?php else: ?>
                                            <i class="anticon opacity-04 font-size-16 anticon-login"></i>
                                            <span class="m-l-10">Login</span>
                                        <?php endif ?>
                                    </div>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Header END -->