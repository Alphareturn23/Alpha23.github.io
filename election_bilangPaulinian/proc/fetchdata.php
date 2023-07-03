<?php 
	include ('../server/servers.php');

    if(isset($_POST['request'])){

        $request = $_POST['request'];

        $query = "SELECT * FROM candidates WHERE dsn_id = '$request'";
        $result = $conn->query($query);

        $count = $result->num_rows;

    }
?>

<table class="table">
    <?php 
    
    if($count){
    
    ?>
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
        <?php
    }else{
        echo '<h3>No data found!</h3>';
    }
        ?>
    </thead>
    <tbody>
        <?php
        
        
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
                                    echo "<a class='btn btn-default shadow-none' href='view_profile.php?id=".$row['candidates_id']."&student_id=".$row['student_id']."&dsn_id=".$row['dsn_id']."&position_id=".$row['position_id']."'><i class='fas fa-eye'> View Profile</i></a>   &nbsp;";
                                    echo "<a data-toggle='modal' data-target='#deleteModal".$row['candidates_id']."' class='btn btn-default shadow-none deletebtn'><i class='fa fa-trash'> Delete</i></a>";
                                    echo "<a data-toggle='modal' data-target='#withdrawModal".$row['candidates_id']."' class='btn btn-default shadow-none deletebtn'><i class='fas fa-archive'></i> Withdraw Candidacy</a>";
                                    echo "</td>";
            }
        
        
        ?>
    </tbody>
</table>