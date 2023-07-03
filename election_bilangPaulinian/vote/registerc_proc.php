<?php
include ('../server/servers.php');

$student_id= $_POST['student_id'];
$desc = $_POST['desc'];
$position = $_POST['position'];
$image = $_FILES['image']['name'];
//rename this image
$image_extension = pathinfo($image, PATHINFO_EXTENSION);
$filename = time().'.'.$image_extension;

$check = "SELECT * FROM students WHERE student_id= '$student_id'";
$id = $conn->query($check)->num_rows;

if($id > 0){

    if(!empty($desc)  && !empty($position)){

        $sql = "INSERT INTO candidates (picture, student_id, dsn_id, position_id) VALUES ('$filename','$student_id','$desc','$position');";
        $result  = $conn->query($sql);

        move_uploaded_file($_FILES['image']['tmp_name'], '../uploads/candidates/'.$filename);

        if($result === true){

            $_SESSION['message'] = 'Candidates Information has been saved!';
            $_SESSION['success'] = 'success';
            header("Location: success.php");
        }
    }else{
        $_SESSION['message'] = 'Please fill up the form completely!';
        $_SESSION['success'] = 'danger';
    }

}else{
    $_SESSION['message'] = 'Student ID already exist. Please try again.';
    $_SESSION['success'] = 'danger';
    header("Location: register_candidates.php");
}



    

	$conn->close();

?>