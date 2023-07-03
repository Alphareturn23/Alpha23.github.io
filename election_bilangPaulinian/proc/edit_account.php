<?php 
include ('../server/servers.php');

$id = $_GET['id'];


$user_id = $_POST['user_id'];
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$role_as = $_POST['role_as'];



if(!empty($user_id)){

    if(!empty($fname) && !empty($lname)){

        $sql = "UPDATE `accounts` SET `account_id`='$user_id',`firstname`='$fname',`lastname`='$lname',  `role_as`='$role_as' WHERE id = '$id'";
        $result  = $conn->query($sql);
    
        if($result === true){
    
           $_SESSION['message'] = 'User Information has been update!';
           $_SESSION['success'] = 'success';

         header('location: ../view_account.php');

          
        }else
        {
            $_SESSION['message'] = 'Something went wrong!';
            $_SESSION['success'] = 'danger';
        }
    }else
    {
        
        $_SESSION['message'] = 'Please fill up the form completely!';
        $_SESSION['success'] = 'danger';
    }
}else{
    
    $_SESSION['message'] = 'Please fill up the form completely!';
    $_SESSION['success'] = 'danger';
}


?>