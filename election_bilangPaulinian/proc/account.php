<?php

include ('../server/servers.php');

$email_add 	= $conn->real_escape_string($_POST['email']);

$password	= sha1($conn->real_escape_string($_POST['password']));
//$password= password_hash($password, PASSWORD_DEFAULT);

if($email_add != '' AND $password != ''){
    $query 		= "SELECT * FROM accounts WHERE email = '$email_add' AND password = '$password'";
    
    $result 	= $conn->query($query);
    
    if($result->num_rows){
        while ($row = $result->fetch_assoc()) {
            $_SESSION['id'] = $row['acc_id'];
            $_SESSION['email'] = $row['email'];
        }

        $_SESSION['message'] = 'You have successfull logged in!';
        $_SESSION['success'] = 'success';

        header('location: ../index.php');

    }else{
        $_SESSION['message'] = 'Email Address or password is incorrect!';
        $_SESSION['success'] = 'danger';
        header('location: ../login.php');
    }
}else{
    $_SESSION['message'] = 'Email Address or password is empty!';
    $_SESSION['success'] = 'danger';
    header('location: ../login.php');
}



?>