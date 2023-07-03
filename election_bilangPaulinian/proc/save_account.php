<?php
include ('../server/servers.php');

$email_add 	= $conn->real_escape_string($_POST['email']);
$pass	= sha1($conn->real_escape_string($_POST['pass']));


if(!empty($email_add) && !empty($pass)){

     $query = "INSERT INTO accounts (email, password) VALUES ('$email_add','$pass');";
     $result  = $conn->query($query);

     if($result === true){

        $_SESSION['message'] = 'Account Information has been saved!';
        $_SESSION['success'] = 'success';
        header("Location: ../view_account.php");
       
    } 
}

$conn->close();


?>
