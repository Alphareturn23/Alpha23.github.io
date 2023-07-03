<?php
include ('server/servers.php');
include ('layouts/header.php');
include ('layouts/sidebar.php');
$sql = "select * from positions";
$result = $conn->query($sql)
?>



<!-- Page Container START -->
    <div class="page-container">

        <!-- Content Wrapper START -->
            <div class="main-content">
                <div class="page-header">
                    <h2 class="header-title">Registered Positions</h2>
                       
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
                                    style="width: 82.8551px;">
                                    Designation:
                                    </th>
                                    <th class="sorting_asc" tabindex="0" 
                                    aria-controls="data-table" rowspan="1" 
                                    colspan="1" aria-sort="ascending" 
                                    aria-label="Name: activate to sort column descending" 
                                    style="width: 82.8551px;">
                                    Position Title:
                                    </th>
                                    <th class="sorting_asc" tabindex="0" 
                                    aria-controls="data-table" rowspan="1" 
                                    colspan="1" aria-sort="ascending" 
                                    aria-label="Name: activate to sort column descending" 
                                    style="width: 82.8551px;">
                                    Action:
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    $dsn_id = $row['dsn_id'];
                                    $sql_2 = "select * from designation where dsn_id ='$dsn_id'";
                                    $result_2 = $conn->query($sql_2);
                                    while ($row_2 = $result_2->fetch_assoc()) {
                                        $description =  $row_2['description'];
                                    }
                                    
                                    echo "<td>".$description."</td>";
                                    echo "<td>".$row['position_title']."</td>";
                                    
                                    echo "<td>";
                                    echo "<a class='btn btn-default shadow-none' href='edit_position.php?id=".$row['position_id']."'><i class='fa fa-edit'></i></a>   &nbsp;";
                                    echo "<a data-toggle='modal' data-target='#deleteModal".$row['position_id']."' class='btn btn-default shadow-none' ><i class='fa fa-trash'></i></a>";
                                    echo "</td>";
                                    ?>
                                    <!-- Modal -->
                                    <div class="modal fade" id='deleteModal<?=$row['position_id']?>'>
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Remove Position</h5>
                                                    <button type="button" class="close" data-dismiss="modal">
                                                        <i class="anticon anticon-close"></i>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure that you want to remove this position?
                                                    <br>(This action is permanent)
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    <a href='proc/delete_position.php?id=<?=$row['position_id']?>' type='button' class='btn btn-danger'>Remove</a>
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
                                    <td colspan="5">No Record Found</td>
                                    
                                </tr>
                                <?php
                            }
                               
                            ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Designation</th>
                                    <th>Position Title</th>
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
<script>
    $('#data-table').DataTable();
</script>
</body>

</html>
