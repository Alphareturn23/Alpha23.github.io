<?php
include ('server/servers.php');
include ('layouts/header.php');
include ('layouts/sidebar.php');
include ('get_code.php');


$sql = "select * from requirements";
$result = $conn->query($sql);



?>

<!-- Page Container START -->
    <div class="page-container">

        <!-- Content Wrapper START -->
            <div class="main-content">
                <div class="page-header">
                    <h2 class="header-title">Registered Students</h2>
                        
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
                                <th>
                                    #
                                    </th>
                                    <th>
                                    Name
                                    </th>
                                   
                                    <th>
                                    Action:
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                    <!-- Ipasok ang query dito lol -->
                                    <?php
                                   
                                        if($result->num_rows >0){

                                            while ($row = $result->fetch_assoc()) {
                                                echo "<tr>";
                                                echo "<td>".$row['id']."</td>";
                                                echo "<td>".$row['name']."</td>";
        
                                                echo "<td>";
                                                echo "<a class='btn btn-default shadow-none' href='edit_requirements.php?id=".$row['id']."'><i class='fa fa-edit'></i></a>   &nbsp;";
                                                echo "<a data-toggle='modal' data-target='#deleteModal".$row['id']."' class='btn btn-default shadow-none'><i class='fa fa-trash'></i></a>";
                                                echo "</td>";
                                                ?> 
                                                <!-- Modal -->
                                                <div class="modal fade" id='deleteModal<?=$row['student_id']?>'>
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Remove Requirements</h5>
                                                                <button type="button" class="close" data-dismiss="modal">
                                                                    <i class="anticon anticon-close"></i>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Are you sure that you want to remove this Requirements?
                                                            
                                                            </div>
                                                            <div class="modal-footer">
                                                                <a href='proc/delete_requirements.php?id=<?=$row['id']?>' type='button' class='btn btn-danger'>Remove</a>
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
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    
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

