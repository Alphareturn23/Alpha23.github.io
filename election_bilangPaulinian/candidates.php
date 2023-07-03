<?php
include ('server/servers.php');
include ('layouts/header.php');
include ('layouts/sidebar.php');

$sql = "select * from candidates";
$result = $conn->query($sql);

?>

<!-- Page Container START -->
<div class="page-container">
        <!-- Content Wrapper START -->
    <div class="main-content">
        <div class="page-header">
            <h2 class="header-title">List of Candidates</h2>
            
        </div>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Registered Candidates</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <?php if(isset($_SESSION['message'])): ?>
                            <div class="alert alert-success-<?php echo $_SESSION['success']; ?> <?= $_SESSION['success']=='danger' ? 'bg-danger text-light' : null ?>" role="alert alert-primary">
                                <?php echo $_SESSION['message']; ?>
                            </div>
                        <?php unset($_SESSION['message']); ?>
                    <?php endif ?>
                    <table id="example1" class="table">
                        <thead>
                        <tr>
                            <th style="width: 82px;"> Picture:</th>
                            <th>Student ID:</th>
                            <th> Designation:</th>
                            <th>Position:</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                            <?php
                                if($result->num_rows > 0){
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<tr>";
                                        $picture = "./uploads/candidates/".$row['picture'];
                                        echo "
                                        <td>
                                        <img src='$picture' width='120' height='120'>
                                        </td>
                                        ";

                                        $student_id = $row['student_id'];
                                        $query = "select * from students where student_id ='$student_id'";
                                        $query_result = $conn->query($query);
                                        while ($query_row = $query_result->fetch_assoc()) {
                                            $student_id =  $query_row['student_id'];
                                        }
                                        echo "<td>".$student_id."</td>";

                                        
                                        $dsn_id = $row['dsn_id'];
                                        $check= "select * from designation where dsn_id ='$dsn_id'";
                                        $result_check= $conn->query($check);
                                        while ($row_check = $result_check->fetch_assoc()) {
                                            $description =  $row_check['description'];
                                        }
                                        
                                        echo "<td>".$description."</td>";

                                        $position_id = $row['position_id'];
                                        $sql_3 = "select * from positions where position_id ='$position_id'";
                                        $result_3 = $conn->query($sql_3);
                                        while ($row_3 = $result_3->fetch_assoc()) {
                                            $position_title =  $row_3['position_title'];
                                        }
                                        echo "<td>".$position_title."</td>";
                                        echo "<td>";
                                        echo "<a class='btn btn-default shadow-none' href='view_profile.php?id=".$row['candidates_id']."&student_id=".$row['student_id']."&dsn_id=".$row['dsn_id']."&position_id=".$row['position_id']."'><i class='fas fa-eye'> </i></a>   &nbsp;";
                                        echo "<a data-toggle='modal' data-target='#deleteModal".$row['candidates_id']."' class='btn btn-default shadow-none deletebtn'><i class='fa fa-trash'> </i></a> &nbsp;";
                                        echo "<a data-toggle='modal' data-target='#withdrawModal".$row['candidates_id']."' class='btn btn-default shadow-none deletebtn'><i class='fas fa-archive'></i> </a> &nbsp;";
                                        echo "<a class='btn btn-primary' href='generate_profile.php?id=".$row['candidates_id']."&student_id=".$row['student_id']."&dsn_id=".$row['dsn_id']."&position_id=".$row['position_id']."'><i class='fas fa-file-alt'>  Generate Profile</i></a>";
                                        echo "</td>";
                                        ?>
                                        <!-- Modal -->
                                        <div class="modal fade" id='deleteModal<?=$row['candidates_id']?>'>
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Remove Candidate</h5>
                                                        <button type="button" class="close" data-dismiss="modal">
                                                            <i class="anticon anticon-close"></i>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Are you sure that you want to remove this candidate?
                                                    
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        <a href='proc/delete_candidate.php?id=<?=$row['candidates_id']?>' type='button' class='btn btn-danger'>Remove</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="modal fade" id='withdrawModal<?=$row['candidates_id']?>'>
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Withdraw Candidacy</h5>
                                                        <button type="button" class="close" data-dismiss="modal">
                                                            <i class="anticon anticon-close"></i>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Are you sure you want to withdraw your candidacy?
                                                    
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        <a href='proc/archive.php?id=<?=$row['candidates_id']?>' type='button' class='btn btn-danger'>Withdraw</a>
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
                <!-- /.card-body -->
            </div>
    </div>
        <?php
        include ('layouts/footer.php');
        ?>
</div>
<?php
include ('layouts/scripts.php');
?>


</body>
</html>

