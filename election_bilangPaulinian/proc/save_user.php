<?php
include ('../server/servers.php');

$user_id = $_POST['user_id'];
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];

$pass= sha1($conn->real_escape_string($_POST['pass']));
$confirm_pass = sha1($conn->real_escape_string($_POST['cpass']));
$role_as	= $conn->real_escape_string($_POST['role_as']);
//$pass = $_POST['pass'];
//$password = password_hash($password, PASSWORD_DEFAULT);


if($pass == $confirm_pass){
    if(!empty($user_id) && !empty($fname) && !empty($lname)){

        $sql = "INSERT INTO accounts (account_id, firstname, lastname, password, role_as) VALUES ('$user_id','$fname', '$lname','$pass','$role_as');";
        $result  = $conn->query($sql);
        
        if($result === true){
        
            $_SESSION['message'] = 'User Information has been saved!';
            // $_SESSION['success'] = 'success';
        
            header("Location: ../view_account.php");
        }
        else{
            $_SESSION['message'] = 'Something went wrong!';
            $_SESSION['success'] = 'danger';
        }
    }else{
        
        $_SESSION['message'] = 'Please fill up the form completely!';
        $_SESSION['success'] = 'danger';
    }

}else{
    $_SESSION['message'] = 'Password did not match!';
    $_SESSION['success'] = 'danger';
    header("Location: ../add_account.php");
}




$conn->close();


?>