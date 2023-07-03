<?php
include ('../server/servers.php');


$descrip = $_POST['descrip'];
$dept = $_POST['dept'];

if(!empty($descrip) && !empty($dept)){

    $sql = "INSERT INTO designation ( dept_id, description) VALUES ('$dept','$descrip');";
     $result  = $conn->query($sql);

     if($result === true){

        $_SESSION['message'] = 'Designation Information has been saved!';
        $_SESSION['success'] = 'success';
        header("Location: ../view_designation.php");
    }
}


	$conn->close();

?>