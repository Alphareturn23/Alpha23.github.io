<?php
include ('../server/servers.php');
 
$column = array(
  
    'student_id',
    'dsn_id',
    'postion_id',
    
);
 
$query = "SELECT * FROM candidates";
 
if (isset($_POST['search']['value'])) {
    $query .= '
 WHERE student_id LIKE "%' . $_POST['search']['value'] . '%" 
 OR dsn_id LIKE "%' . $_POST['search']['value'] . '%" 
 OR position_id LIKE "%' . $_POST['search']['value'] . '%" 
 ';
}
 
if (isset($_POST['order'])) {
    $query .= 'ORDER BY ' . $column[$_POST['order']['0']['column']] . ' ' . $_POST['order']['0']['dir'] . ' ';
} else {
    $query .= 'ORDER BY candidates_id DESC ';
}
 
$query1 = '';
 
if ($_POST['length'] != -1) {
    $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}
 
$statement = $connect->prepare($query);
 
$statement->execute();
 
$number_filter_row = $statement->rowCount();
 
$statement = $connect->prepare($query . $query1);
 
$statement->execute();
 
$result = $statement->fetchAll();
 
$data = array();
 
foreach ($result as $row) {
    $sub_array   = array();
    $sub_array[] = $row['student_id'];
    $sub_array[] = $row['dsn_id'];
    $sub_array[] = $row['position_id'];
  
    $data[]      = $sub_array;
}
 
function count_all_data($connect)
{
    $query     = "SELECT * FROM candidates";
    $statement = $connect->prepare($query);
    $statement->execute();
    return $statement->rowCount();
}
 
$output = array(
    'draw' => intval($_POST['draw']),
    'recordsTotal' => count_all_data($connect),
    'recordsFiltered' => $number_filter_row,
    'data' => $data
);
 
echo json_encode($output);
 
?>