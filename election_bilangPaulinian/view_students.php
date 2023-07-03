<?php
include ('server/servers.php');
include ('layouts/header.php');
include ('layouts/sidebar.php');
include ('get_code.php');


$sql = "select * from students";
$result = $conn->query($sql);



?>

<!-- Page Container START -->
<div class="page-container">
        <!-- Content Wrapper START -->
    <div class="main-content">
            <div class="page-header">
                <h2 class="header-title">,List of Students Voters</h2>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Registered Candidates</h3>
                </div>
                <div class='card-body'>

                    <?php if(isset($_SESSION['message'])): ?>
                        <div class="alert alert-success-<?php echo $_SESSION['success']; ?> <?= $_SESSION['success']=='danger' ? 'bg-danger text-light' : null ?>" role="alert alert-primary">
                            <?php echo $_SESSION['message']; ?>
                        </div>
                    <?php unset($_SESSION['message']); ?>
                    <?php endif ?>
                    <table id="example1" class="table">
                        <thead>
                            <tr>
                                <th >Student ID:</th>
                                <th>First Name:</th>
                                <th >Last Name:</th>
                                <th > Department:</th>
                                <th > Course:</th>
                                <th >Year: </th>
                                <th > Action: </th>
                            </tr>
                        </thead>
                        <tbody>
                                        <!-- Ipasok ang query dito lol -->
                                <?php
                                    
                                    if($result->num_rows >0){

                                                while ($row = $result->fetch_assoc()) {
                                                    echo "<tr>";
                                                    echo "<td>".$row['student_id']."</td>";
                                                    echo "<td>".$row['fname']."</td>";
                                                    echo "<td>".$row['lname']."</td>";

                                                    $dept_id = $row['dept_id'];
                                                    $sql_2 = "select * from tbl_departments where dept_id ='$dept_id'";
                                                    $result_2 = $conn->query($sql_2);
                                                    while ($row_2 = $result_2->fetch_assoc()) {
                                                        $dept_title =  $row_2['dept_title'];
                                                        $_SESSION["dept_id_toget_title"]=$dept_id;
                                                    }
                                                    echo "<td>".$dept_title."</td>";
                                                
                                                    echo "<td>".$row['course']."</td>";
                                                    echo "<td>".$row['year']."</td>";

                                                    echo "<td>";
                                                    echo "<a class='btn btn-default shadow-none' href='edit_students.php?id=".$row['student_id']."&dept_id=".$dept_id."'><i class='fa fa-edit'></i></a>   &nbsp;";
                                                    echo "<a data-toggle='modal' data-target='#deleteModal".$row['student_id']."' class='btn btn-default shadow-none'><i class='fa fa-trash'></i></a>";
                                                    echo "</td>";
                                                    ?> 
                                                    <!-- Modal -->
                                                    <div class="modal fade" id='deleteModal<?=$row['student_id']?>'>
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Remove Student</h5>
                                                                    <button type="button" class="close" data-dismiss="modal">
                                                                        <i class="anticon anticon-close"></i>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Are you sure that you want to remove this Students?
                                                                
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <a href='proc/delete_student.php?id=<?=$row['student_id']?>' type='button' class='btn btn-danger'>Remove</a>
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php
                                                    echo "</tr>";
                                                }
                                    }else{
                                        ?>
                                        <tr>
                                            <td ></td>
                                            <td ></td>
                                            <td colspan="5">No Record Found</td>
                                        </tr>

                                        <?php    
                                    }
                                ?>
                            
                        </tbody>
                       
                    </table>
                </div>

            </div>
           
        </div>
        <?php
            include ('layouts/footer.php');
        ?>
                <!-- Content Wrapper END -->
    </div>
                <!-- Page Container END -->
    <?php
        include ('layouts/scripts.php');
    ?>    
</div>



