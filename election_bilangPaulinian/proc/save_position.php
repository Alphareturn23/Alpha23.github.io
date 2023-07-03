<?php

include ('../server/servers.php');
$descrip = $_POST['descrip'];
$position_title = $_POST['position_title'];

if(!empty($descrip) && !empty($position_title)){

    $sql = "INSERT INTO positions (dsn_id, position_title) VALUES ('$descrip', '$position_title');";
     $result  = $conn->query($sql);

     if($result === true){

        $_SESSION['message'] = 'Position Information has been saved!';
        $_SESSION['success'] = 'success';
        header("Location: ../view_position.php");
    }
}


	$conn->close();


?>