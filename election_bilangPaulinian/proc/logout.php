<?php
	include '../server/servers.php';
   	session_destroy();
    unset($_SESSION['user_id']);
    unset($_SESSION['role']);

    session_start();	
    $_SESSION['message'] = "You have been logged out!";
    $_SESSION['success'] = 'danger';


    header('location: ../login.php');
