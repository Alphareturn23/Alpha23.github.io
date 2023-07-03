<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .checkbox-larger {
        transform: scale(2);
        margin: 20px;
        }
    </style>
</head>
<body>

    <?php
        session_start();
        include "seer_carlos.php";

        //department of the voter
        $dept_id =  $_SESSION["dept_id"];

        ?>
        <!-- MAIN FORM -->
        <form action="view.php" method="post">

        <h1>UNIWIDE</h1>
        <?php
        $getUniwidePositions = get_where_custom("positions", "dsn_id", "1");
        foreach ($getUniwidePositions as $key => $rowUniwidePositions) {
            $uniwidePosition_id = $rowUniwidePositions['position_id'];
            $uniwidePositionTitle = $rowUniwidePositions['position_title'];
        ?>
        <b style="color:blue;"><?= $uniwidePositionTitle ?> </b><br>
        <?php
            $getCandidatesFromPositionID = get_where_custom("candidates", "position_id", $uniwidePosition_id);
            $x1 = 0;
            foreach ($getCandidatesFromPositionID as $key => $rowCandidates) {
                $x1++;
                $uniwideCandidateID = $rowCandidates['candidates_id'];
                $uniwideCandidateStudentID = $rowCandidates['student_id'];
                $candidate_name = _get_fullname_from_studentID($uniwideCandidateStudentID, "students");
                $candidate_photo = _get_photo_from_candidateID($uniwideCandidateID, "candidates");
                ?>
                <table>
                    <tr>
                        <td>
                            <input type="checkbox" class="checkbox-larger" name="<?= $uniwidePositionTitle.$x1 ?>" value="<?= $uniwideCandidateID ?>">
                        </td>
                        <td>
                            <img src="<?= $candidate_photo ?>" width="75">
                        </td>
                        <td>
                        <b><?= $candidate_name ?></b>
                        </td>
                    </tr>
                </table>
                
                <br><br>
                <?php
            } // end foreach getCandidatesFromPositionID
        ?>
        
        <?php
        } // end foreach getUniwidePositions
    ?>

    <button type="submit">SUBMIT</button>
    <!-- END MAIN FORM -->
    </form>

</body>
</html>