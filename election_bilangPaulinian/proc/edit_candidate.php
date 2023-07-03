<?php

include ('../server/servers.php');

if(isset($_POST['update_info']))
{
    $id = $_POST['student_id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $dept = $_POST['dept'];
    $course= $_POST['course'];
    $year= $_POST['yrlevel'];





    $ids = $_POST['candidates_id'];
    $student_id= $_POST['student_id'];
    $students_id= $_POST['student_id'];
    $desc = $_POST['desc'];
    $position = $_POST['position'];
    $data = $_POST['req'];

    $allData = implode (",", $data);

    $old_filename = $_POST['old_image'];
    $image = $_FILES['image']['name'];
    //rename this image

    $update_filename= "";
    if($image !=NULL){
        $image_extension = pathinfo($image, PATHINFO_EXTENSION);
        $filename = time().'.'.$image_extension;

        $update_filename = $filename;
    }else{
        $update_filename = $old_filename;
    }

    $query =  "UPDATE students SET fname= '$firstname', lname='$lastname',
     dept_id='$dept', course='$course', year='$year' where student_id = '$id'";

   
    $sql = "UPDATE candidates SET picture = '$update_filename', student_id= '$student_id', 
    dsn_id= '$desc', position_id= '$position', requirements = '$allData' WHERE candidates_id = '$ids'";
    $result  = $conn->query($sql);
        if($result1 = $conn->query($query)){

            $_SESSION['message'] = 'Candidates Information has been saved!';
            $_SESSION['success'] = 'success';

            if($image !=NULL){
                if(file_exists('../uploads/candidates/'.$old_filename)){
                    unlink("../uploads/candidates/".$old_filename); 

                }
                move_uploaded_file($_FILES['image']['tmp_name'], '../uploads/candidates/'.$update_filename);
            }
        }else{
            $_SESSION['message'] = 'Candidates Information has not been saved!';
            $_SESSION['success'] = 'danger';
        }

}



    header('location: ../candidates.php');

    $conn->close();

?>