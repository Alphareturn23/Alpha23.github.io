<?php
include 'server/servers.php';
include ('layouts/header.php');
include ('layouts/sidebar.php');

$sql = "select * from tbl_departments";
$result = $conn->query($sql);
if ($result->num_rows >0) {

?>


<!-- Page Container START -->
    <div class="page-container" id="autodata">

        <!-- Content Wrapper START -->
            <div class="main-content">
                <div class="page-header">
                    <h2 class="header-title">Registered Department</h2>
                        
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
                                    Department Code:
                                    </th>
                                    <th class="sorting_asc" tabindex="0" 
                                    aria-controls="data-table" rowspan="1" 
                                    colspan="1" aria-sort="ascending" 
                                    aria-label="Name: activate to sort column descending" 
                                    style="width: 82.8551px;">
                                    Department Title:
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
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>".$row['dept_code']."</td>";
                                    echo "<td>".$row['dept_title']."</td>";
                                    
                                    echo "<td>";
                                    echo "<a class='btn btn-default shadow-none' href='edit_department.php?id=".$row['dept_id']."'><i class='fa fa-edit'></i></a>   &nbsp;";
                                    echo "<a data-toggle='modal' data-target='#deleteModal".$row['dept_id']."' class='btn btn-default shadow-none'><i class='fa fa-trash'></i></a>";
                                    echo "</td>";
                                    ?> 
                                    <!-- Modal -->
                                    <div class="modal fade" id='deleteModal<?=$row['dept_id']?>'>
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Remove Department</h5>
                                                    <button type="button" class="close" data-dismiss="modal">
                                                        <i class="anticon anticon-close"></i>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure that you want to remove this Department?
                                                   
                                                </div>
                                                <div class="modal-footer">
                                                    <a href='proc/delete_department.php?id=<?=$row['dept_id']?>' type='button' class='btn btn-danger'>Remove</a>
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    echo "</tr>";
                                }
                            ?>
                                </tr>
                            </tbody>
                            <tfoot>
                                
                            </tfoot>
                        </table>
                    </div>
                        <!-- Content goes Here -->
                </div>
                    <!-- Content Wrapper END -->
                    
<?php
    }
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
