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
                    <h2 class="header-title">Registered Candidates</h2>
                       
                       
                    </div>
                    <div class='card-body'>
                    <?php if(isset($_SESSION['message'])): ?>
                                <div class="alert alert-success-<?php echo $_SESSION['success']; ?> <?= $_SESSION['success']=='danger' ? 'bg-danger text-light' : null ?>" role="alert alert-primary">
                                    <?php echo $_SESSION['message']; ?>
                                </div>
                            <?php unset($_SESSION['message']); ?>
                            <?php endif ?>
                        <table id="data-table" class="table">
                            <thead>
                                <tr>
                                    <th class="sorting_asc" tabindex="0" 
                                    aria-controls="data-table" rowspan="1" 
                                    colspan="1" aria-sort="ascending" 
                                    aria-label="Name: activate to sort column descending" 
                                    style="width: 82px;">
                                    Picture:
                                    </th>
                                    <th class="sorting_asc" tabindex="0" 
                                    aria-controls="data-table" rowspan="1" 
                                    colspan="1" aria-sort="ascending" 
                                    aria-label="Name: activate to sort column descending" 
                                    style="width: 82px;">
                                    Student ID:
                                    </th>
                                    <th class="sorting_asc" tabindex="0" 
                                    aria-controls="data-table" rowspan="1" 
                                    colspan="1" aria-sort="ascending" 
                                    aria-label="Name: activate to sort column descending" 
                                    style="width: 82px;">
                                    Designation:
                                    </th>
                                    <th class="sorting_asc" tabindex="0" 
                                    aria-controls="data-table" rowspan="1" 
                                    colspan="1" aria-sort="ascending" 
                                    aria-label="Name: activate to sort column descending" 
                                    style="width: px;">
                                    Position:
                                    </th>
                                    <th class="sorting_asc" tabindex="0" 
                                    aria-controls="data-table" rowspan="1" 
                                    colspan="1" aria-sort="ascending" 
                                    aria-label="Name: activate to sort column descending" 
                                    style="width: px;">
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
                                    echo "<td>".$position_title."</td>";
                                    echo "<td>";
                                    echo "<a class='btn btn-default shadow-none' href='edit_can.php?id=".$row['candidates_id']."&dsn_id=".$row['dsn_id']."&position_id=".$row['position_id']."'><i class='fa fa-edit'> Edit</i></a>   &nbsp;";
                                    echo "<a data-toggle='modal' data-target='#deleteModal".$row['candidates_id']."' class='btn btn-default shadow-none deletebtn'><i class='fa fa-trash'> Delete</i></a>";
                                    
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
                            <tfoot>
                                <tr>
                                    <th>Picture</th>
                                    <th>ID Number</th>
                                    <th>Designation</th>
                                    <th>Position</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
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

<?php
include ('layouts/scripts.php');
?>
</body>

</html>
<script>
    $('#data-table').DataTable();
</script>
