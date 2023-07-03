<?php
include ('../server/servers.php');

$student_id= $_POST['student_id'];
$desc = $_POST['desc'];
$position = $_POST['position'];
$image = $_FILES['image']['name'];

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$dept = $_POST['dept'];
$course= $_POST['course'];
$year = $_POST['yrlevel'];

$data = $_POST['req'];

$allData = implode (", ", $data);
//rename this image
$image_extension = pathinfo($image, PATHINFO_EXTENSION);
$filename = time().'.'.$image_extension;

$check = "SELECT * FROM students WHERE student_id= '$student_id'";
$id = $conn->query($check)->num_rows;

if($id == 0){

    //if(!empty($desc)  && !empty($position)){
        //foreach($data as $datas){
            $sql = "INSERT INTO candidates (picture, student_id, dsn_id, position_id, requirements_id) VALUES ('$filename','$student_id','$desc','$position' , '$allData');";
            $result  = $conn->query($sql);
    
            move_uploaded_file($_FILES['image']['tmp_name'], '../uploads/candidates/'.$filename);

       // }

       

        if($result == 1){

            $sql1= "INSERT INTO students (student_id, fname, lname, dept_id, course, year) VALUES ('$student_id','$fname', '$lname', '$dept', '$course', '$year');";
            $result1  = $conn->query($sql1);
        
            if($result1 === TRUE){
        
                $_SESSION['message'] = 'Candidates Information has been saved!';
                $_SESSION['success'] = 'success';
                
            
            }
        }
    
header("Location: ../candidates.php");
}







    

$conn->close();

?>