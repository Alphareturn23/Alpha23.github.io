<?php
session_start();

// Get the selected candidates from the form
$selectedCandidates = array();
foreach ($_POST as $key => $value) {
    if (strpos($key, 'c_') !== false) {
        $selectedCandidates[] = $value;
    }
}

// Store the selected candidates in the session or process them as needed
$_SESSION['selectedCandidates'] = $selectedCandidates;

// Redirect the user to a success page or perform further actions
header('Location: success.php');
exit();
?>
