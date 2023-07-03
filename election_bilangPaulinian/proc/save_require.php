<?php
include ('../server/servers.php');

$name = $_POST['name'];



    
if(!empty($name)){

        $query = "INSERT INTO requirements(name) VALUES ('$name');";
         $result  = $conn->query($query);

         if($result === true){

            $_SESSION['message'] = 'Student Information has been saved!';
            $_SESSION['success'] = 'success';
            header("Location: ../view_requirements.php");
           
        } else{
            echo "this page is n";
        }
}
   
	$conn->close();


?>