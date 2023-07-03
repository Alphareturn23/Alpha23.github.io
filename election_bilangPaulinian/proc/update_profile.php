<?php 
include ('../server/servers.php');




$user_id= $conn->real_escape_string($_POST['student_id']);
$fname= $conn->real_escape_string($_POST['firstname']);
$lname= $conn->real_escape_string($_POST['lastname']);
$cur_pass 	= sha1($conn->real_escape_string($_POST['cur_pass']));
$new_pass 	= sha1($conn->real_escape_string($_POST['new_pass']));
$con_pass 	= sha1($conn->real_escape_string($_POST['confirm_pass']));


    

if(!empty($user_id)){

        if($new_pass == $con_pass){
            $check = "SELECT * FROM accounts WHERE account_id = '$user_id' AND password = '$cur_pass'";
            $res = $conn->query($check);

            if($res->num_rows > 0){

                $query 		= "UPDATE accounts SET `firstname` = '$fname', `lastname` = '$lname', `password`= '$new_pass' WHERE account_id = '$user_id'";	
                $result 	= $conn->query($query);

                if($result === true){
                    
                    $_SESSION['message'] = 'Account Information has been updated!';
                    $_SESSION['success'] = 'success';

                }else{

                    $_SESSION['message'] = 'Something went wrong!';
                    $_SESSION['success'] = 'danger';
                }
            }else{
                $_SESSION['message'] = 'Current Password is incorrect!';
                $_SESSION['success'] = 'danger';
            }

        }else{
            $_SESSION['message'] = 'Password did not match!';
            $_SESSION['success'] = 'danger';
        }

}else{
    $_SESSION['message'] = 'No Username found!';
    $_SESSION['success'] = 'danger';
}

    header("Location: ../edit_profile.php");


















?>