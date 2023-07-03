<?php
include ('../server/servers.php');

$id = $_GET['id'];


if($id != ''){
    $sql = "DELETE FROM accounts WHERE acc_id='$id'";
    
    $result 	= $conn->query($sql);
    
    if($result === true){
        $_SESSION['message'] = 'Accounts has been removed!';
        $_SESSION['success'] = 'danger';
        
    }
}

header('location: ../view_account.php');
$conn->close();

?>