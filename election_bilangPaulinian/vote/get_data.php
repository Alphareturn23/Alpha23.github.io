<?php


include ('../server/servers.php');
$id = $_POST['id'];
$sql = "SELECT * FROM positions WHERE dsn_id = '$id'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo '<option value="">Select Position</option>';
    while ($row = $result->fetch_assoc()) {
        echo '<option value="' . $row['position_id'] . '">' . $row['position_title'] . '</option>';
    }
}else{
    echo "0 result";
}


