<?php

include ('../server/servers.php');

$id = $_GET['id'];

$descrip = $_POST['descrip'];
$position_title = $_POST['position_title'];

if(!empty($id)){

    if(!empty($descrip) && !empty($position_title)){

        $sql = "UPDATE positions SET dsn_id='$descrip', position_title= '$position_title' WHERE position_id = '$id'";
        $result  = $conn->query($sql);
    
        if($result === true){
    
           $_SESSION['message'] = 'Position Information has been update!';
           $_SESSION['success'] = 'success';
           header('location: ../view_position.php');
           
       }
    }
}


$conn->close();



?>