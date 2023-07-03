<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilang Paulinian</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script src="assets/jquery/jquery.min.js"></script>
    <style>
        .checkbox-larger {
        transform: scale(2);
        margin: 20px;
        }
    </style>
</head>

<body>
<div class="container">
    <br>
    <div class="card border-success col-sm-5" style="float:left;margin-right:12px;padding: 0 0;">
        <div class="card-header border-success" style="background-color:#036635;margin:0px;">
              <b style="color:#fff;">PSG UNIWIDE</b>
        </div>
        <div class="card-body">
            <h5 class="card-title">President</h5>
            <div class="card mb-3" style="max-width: 540px;">
                <table cellpadding="10" border="0">
                    <tr>
                        <td style="width:10%;">
                        <input type="checkbox" class="checkbox-larger" name="" value="">
                        </td>
                        <td style="width:25%;">
                            <img src="uploads/candidates/1664269028.png" style="width:100%;" class="rounded-circle" >
                        </td>
                        <td>
                            BERBANO, KRISHA
                        </td>
                    </tr>
                </table>
            </div>

            <h5 class="card-title">Vice President</h5>
            <div class="card mb-3" style="max-width: 540px;">
                <table cellpadding="10" border="0">
                    <tr>
                        <td style="width:10%;">
                        <input type="checkbox" class="checkbox-larger" name="" value="">
                        </td>
                        <td style="width:25%;">
                            <img src="uploads/candidates/1664269028.png" style="width:100%;" class="rounded-circle" >
                        </td>
                        <td>
                            BERBANO, KRISHA
                        </td>
                    </tr>
                </table>
            </div>

            <h5 class="card-title">Executive Secretary</h5>
            <div class="card mb-3" style="max-width: 540px;">
                <table cellpadding="10" border="0">
                    <tr>
                        <td style="width:10%;">
                        <input type="checkbox" class="checkbox-larger" name="" value="">
                        </td>
                        <td style="width:25%;">
                            <img src="uploads/candidates/1664269028.png" style="width:100%;" class="rounded-circle" >
                        </td>
                        <td>
                            BERBANO, KRISHA
                        </td>
                    </tr>
                </table>
            </div>

            <h5 class="card-title">Treasurer</h5>
            <div class="card mb-3" style="max-width: 540px;">
                <table cellpadding="10" border="0">
                    <tr>
                        <td style="width:10%;">
                        <input type="checkbox" class="checkbox-larger" name="" value="">
                        </td>
                        <td style="width:25%;">
                            <img src="uploads/candidates/1664269028.png" style="width:100%;" class="rounded-circle" >
                        </td>
                        <td>
                            BERBANO, KRISHA
                        </td>
                    </tr>
                </table>
            </div>

            <h5 class="card-title">Press Relations Officer</h5>
            <div class="card mb-3" style="max-width: 540px;">
                <table cellpadding="10" border="0">
                    <tr>
                        <td style="width:10%;">
                        <input type="checkbox" class="checkbox-larger" name="" value="">
                        </td>
                        <td style="width:25%;">
                            <img src="uploads/candidates/1664269028.png" style="width:100%;" class="rounded-circle" >
                        </td>
                        <td>
                            BERBANO, KRISHA
                        </td>
                    </tr>
                </table>
            </div>

            
        </div>
    </div>

    <div class="card border-success col-sm-5">
        <div class="card-header bg-transparent border-success">Header</div>
        <div class="card-body">
            <h5 class="card-title">Success card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>
</div>

    <?php
    session_start();
    include "seer_carlos.php";

    //department of the voter
    $dept_id =  $_SESSION["dept_id"];

    ?>
    <!-- MAIN FORM -->
    <form action="view.php" method="post">
        
        <h1>UNIWIDE</h1>
        

        <button type="submit">SUBMIT</button>
    <!-- END MAIN FORM -->
    </form>
</body>
</html>