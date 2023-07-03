<?php
include ('server/servers.php');

if ($_POST['action'] === 'validate') {
    // Step 2: Perform the validation query
    $query = "SELECT COUNT(*) AS count FROM candidates WHERE position_id = 2";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $count = $row['count'];

        if ($count >= 1) {
            // At least one vice president is selected
            echo 'success';
        } else {
            // No vice president is selected
            echo 'error';
        }
    } else {
        // Error in the query
        echo 'error';
    }
}
?>
