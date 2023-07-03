<?php
include ('server/servers.php');
include ('layouts/header.php');
include ('layouts/sidebar.php');

$sql = "select * from tbl_archive";
$result = $conn->query($sql);

?>


<!-- Page Container START -->
    <div class="page-container">

        <!-- Content Wrapper START -->
            <div class="main-content">
                <div class="page-header">
                    <h2 class="header-title">Candidates Withdraw</h2>
                    
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
                                    
                                    <th 
                                    style="width: 82.8551px;">
                                    Picture:
                                    </th>
                                    <th>
                                    Student ID:
                                    </th>
                                    <th >
                                    Designation:
                                    </th>
                                    <th >
                                    Position:
                                    </th>
                                    <th>
                                    Action:
                                    </th>
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
                                    <img src='$picture' width='100' height='100'>
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
                                    
                                    echo "<td> ".$position_title."</td>";
                                    echo "<td>";
                                    echo "<a data-toggle='modal' data-target='#restoreModal".$row['id']."' class='btn btn-default shadow-none deletebtn'><i class='fas fa-undo-alt'></i></a>";
                                    echo "</td>";
                                    ?>
                                    <!-- Modal -->
                                    <div class="modal fade" id='restoreModal<?=$row['id']?>'>
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Restore Candidates</h5>
                                                    <button type="button" class="close" data-dismiss="modal">
                                                        <i class="anticon anticon-close"></i>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure that you want to remove this candidate?
                                                    <br>(This action is permanent)
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    <a href='proc/restore.php?id=<?=$row['id']?>' type='button' class='btn btn-danger'>Restore</a>
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
                        <!-- Content goes Here -->
                </div>
                    <!-- Content Wrapper END -->
                    
<?php
include ('layouts/footer.php');
?>
            </div>
                <!-- Page Container END -->
        </div>
</div>
<!-- Core Vendors JS -->
<?php
include ('layouts/scripts.php');
?>
</body>

</html>
<script>
    $('#data-table').DataTable();
</>