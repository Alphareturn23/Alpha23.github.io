<?php
session_start();
include "seer_carlos.php";
$dept_id = $_SESSION["dept_id"];
/*
echo '<pre>';
var_dump($_SESSION);
echo '</pre>';
*/
?>
<h1>REVIEW YOUR VOTE</h1>
<table border="1" cellpadding="5" width="600">
<?php
for ($i=0; $i <= $_SESSION['total_sessions']-1; $i++) { 
    $a = $_SESSION['votes'][$i];
    if (isset($_POST['c_'.$a])){
        //add the vote to dbase
        $student_id = $_SESSION['student_id'];
        $b = explode("-",$a);
        $position_id =  $b[0];
        $candidate_id = $b[1];
        $_SESSION['cc_'.$a] = "checked";
        //echo $student_id." ".$candidate_id." ".$position_id."<br>";
    ?>
        
            <tr>
                <td><?=  _get_position_from_positionID($position_id, "positions")?></td>
                <td><?= _get_fullname_from_CandidateID($candidate_id) ?></td>
            </tr>
    <?php
    } else {
        $_SESSION['cc_'.$a] = " ";
    }
}
?>
</table>
<br><br>

<?php
if ($dept_id==1) {
    $location =  "votesite.php";
} elseif ($dept_id==2) {
    $location =  "votesaste.php";
} elseif ($dept_id==3) {
    $location =  "votesbahm.php";
} elseif ($dept_id==4) {
    $location =  "votesnahs.php";
} 
?>
<a href="submitvote.php"><h1>CONFIRM</h1></a><br>
<a href="<?= $location?>"><h1>EDIT</h1></a>