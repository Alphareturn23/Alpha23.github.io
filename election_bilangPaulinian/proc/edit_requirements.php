<?php 
include ('../server/servers.php');
$id = $_GET['id'];

$name = $_POST['name'];



    $sql = "UPDATE requirements SET name= '$name' where id = '$id'";
    $result  = $conn->query($sql);
  
    if($result === true){

       $_SESSION['message'] = 'Students Information has been update!';
       $_SESSION['success'] = 'success';
       header('location: ../view_requirements.php');
   }


    

    $conn->close();

?>