<?php
include ('server/servers.php');
include ('layouts/header.php');
include ('layouts/sidebar.php');
include 'get_code.php';
 
?>

<!-- Page Container START -->
<div class="page-container">

<!-- Content Wrapper START -->
    <div class="main-content">
        <div class="page-header">
            <h2 class="header-title">DASHBOARD</h2>
            <?php if(isset($_SESSION['message'])): ?>
                         <div class="alert alert-success-<?php echo $_SESSION['success']; ?> <?= $_SESSION['success']=='danger' ? 'bg-danger text-light' : null ?>" role="alert alert-primary">
                             <?php echo $_SESSION['message']; ?>
                         </div>
                    <?php unset($_SESSION['message']); ?>
            <?php endif ?>
                
            </div>
            <?php if(isset($_SESSION['user_id']) && $_SESSION['role']=='Admin'):?>
                <!-- Content goes Here -->
                <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media align-items-center">
                                        <div class="avatar avatar-icon avatar-lg avatar-blue">
                                         <i class="anticon anticon-team"></i>
                                        </div>
                                        <div class="m-l-15">
                                            <?php 
                                                $sql = "SELECT * FROM candidates";
                                                $result = mysqli_query($conn, $sql);

                                                if ($total = mysqli_num_rows($result)) {
                                                    echo ' <h2 class="m-b-0">'.$total.'</h2>';

                                                }else{
                                                    echo ' <h2 class="m-b-0">No Data</h2>';
                                                }
                                            ?>
                                            <p class="m-b-0 text-muted">Total Candidates</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    
                                        <div class="media align-items-center">
                                        <div class="avatar avatar-icon avatar-lg avatar-cyan">
                                            <i class="anticon anticon-team"></i>
                                        </div>
                                        <div class="m-l-15">
                                        <?php 
                                                $sql = "SELECT * FROM students";
                                                $result = mysqli_query($conn, $sql);

                                                if ($total_student = mysqli_num_rows($result)) {
                                                    echo ' <h2 class="m-b-0">'.$total_student.'</h2>';

                                                }else{
                                                    echo ' <h2 class="m-b-0">No Data</h2>';
                                                }
                                            ?>
                                            <p class="m-b-0 text-muted">Total Student Voter</p>
                                        </div>
                                        </div>
                                    
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6 col-lg-3">
                            
                                <div class="card">
                                <div class="card-body">
                                    <div class="media align-items-center">
                                        <div class="avatar avatar-icon avatar-lg avatar-cyan">
                                            <i class="anticon anticon-team"></i>
                                        </div>
                                        <div class="m-l-15">
                                        <?php 
                                                $sql = "SELECT * FROM votes";
                                                $result = mysqli_query($conn, $sql);

                                                if ($total_votes = mysqli_num_rows($result)) {
                                                    echo ' <h2 class="m-b-0">'.$total_votes.'</h2>';

                                                }else{
                                                    echo ' <h2 class="m-b-0">No Data</h2>';
                                                }
                                            ?>
                                            <p class="m-b-0 text-muted">Total Voters Voted</p>
                                        </div>
                                    </div>
                                </div>
                                </div>
                        </div>



                        <div class="col-md-6 col-lg-3">
                            
                            <div class="card">
                                <div class="card-body">
                                <div class="media align-items-center">
                                    <div class="avatar avatar-icon avatar-lg avatar-cyan">
                                        <i class="anticon anticon-team"></i>
                                    </div>
                                    <div class="m-l-15">
                                    <?php 
                                            $sql = "SELECT * FROM tbl_archive";
                                            $result = mysqli_query($conn, $sql);

                                            if ($total_withdraw = mysqli_num_rows($result)) {
                                                echo ' <h2 class="m-b-0">'.$total_withdraw .'</h2>';

                                            }else{
                                                echo ' <h2 class="m-b-0">No Data</h2>';
                                            }
                                        ?>
                                        <p class="m-b-0 text-muted">Total Withdrawal of Candidacy</p>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                                    <div class="card-body">
                                        <h5>Registered Candidates</h5>
                                        <div class="m-v-45 text-center" style="height: 220px">
                                            <canvas class="chart" id="donut-chart"></canvas>
                                        </div>
                                        <div class="row p-t-25">
                                            <div class="col-md-8 m-h-auto">
                                                <div class="d-flex justify-content-between align-items-center m-b-20">
                                                    <p class="m-b-0 d-flex align-items-center">
                                                        <span class="badge badge-secondary badge-dot m-r-10"></span>
                                                        <span>SITE</span>
                                                    </p>
                                                    <h5 class="m-b-0">
                                                        <?php
                                                            $sql = "SELECT * FROM candidates WHERE dsn_id = '2'";
                                                            $result = mysqli_query($conn, $sql);

                                                            if ($total = mysqli_num_rows($result)) {
                                                                echo $total;

                                                            }else{
                                                                echo '0';
                                                            }
                                                    
                                                        ?>
                                                    </h5>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center m-b-20">
                                                    <p class="m-b-0 d-flex align-items-center">
                                                        <span class="badge badge-primary badge-dot m-r-10"></span>
                                                        <span>SASTE</span>
                                                    </p>
                                                    <h5 class="m-b-0">
                                                        <?php
                                                                $sql = "SELECT * FROM candidates WHERE dsn_id = '3'";
                                                                $result = mysqli_query($conn, $sql);

                                                                if ($total = mysqli_num_rows($result)) {
                                                                    echo $total;

                                                                }else{
                                                                    echo '0';
                                                                }
                                                        
                                                            ?>
                                                    </h5>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center m-b-20">
                                                    <p class="m-b-0 d-flex align-items-center">
                                                        <span class="badge badge-warning badge-dot m-r-10"></span>
                                                        <span>SBAHM</span>
                                                    </p>
                                                    <h5 class="m-b-0">
                                                        <?php
                                                                $sql = "SELECT * FROM candidates WHERE dsn_id = '4'";
                                                                $result = mysqli_query($conn, $sql);

                                                                if ($total = mysqli_num_rows($result)) {
                                                                    echo $total;

                                                                }else{
                                                                    echo '0';
                                                                }
                                                        
                                                            ?>
                                                    </h5>
                                                </div>


                                                <div class="d-flex justify-content-between align-items-center m-b-20">
                                                    <p class="m-b-0 d-flex align-items-center">
                                                        <span class="badge badge-danger badge-dot m-r-10"></span>
                                                        <span>SNAHS</span>
                                                    </p>
                                                    <h5 class="m-b-0">
                                                        <?php
                                                                $sql = "SELECT * FROM candidates WHERE dsn_id = '5'";
                                                                $result = mysqli_query($conn, $sql);

                                                                if ($total = mysqli_num_rows($result)) {
                                                                    echo $total;

                                                                }else{
                                                                    echo '0';
                                                                }
                                                        
                                                            ?>
                                                    </h5>
                                                </div>

                                                <div class="d-flex justify-content-between align-items-center m-b-20">
                                                    <p class="m-b-0 d-flex align-items-center">
                                                        <span class="badge badge-success badge-dot m-r-10"></span>
                                                        <span>UNIWIDE</span>
                                                    </p>
                                                    <h5 class="m-b-0">
                                                        <?php
                                                                $sql = "SELECT * FROM candidates WHERE dsn_id = '5'";
                                                                $result = mysqli_query($conn, $sql);

                                                                if ($total = mysqli_num_rows($result)) {
                                                                    echo $total;

                                                                }else{
                                                                    echo '0';
                                                                }
                                                        
                                                            ?>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                            <h5>Total Votes and Registered Student</h5>
                            <div class="m-v-45 text-center" style="height: 220px">
                                <canvas class="chart" id="bar-chart"></canvas>

                            </div>
                                
                            </div>
                        </div>
                       
                    </div>
                </div>
            <?php endif ?>

            <?php if(isset($_SESSION['user_id']) && $_SESSION['role']=='Comelec Chair'):?>
            <div class="row">
                 <div class="col-md-6 col-lg-3">
                    <div class="card">
                                <div class="card-body">
                                    <div class="media align-items-center">
                                        <div class="avatar avatar-icon avatar-lg avatar-blue">
                                         <i class="anticon anticon-team"></i>
                                        </div>
                                        <div class="m-l-15">
                                            <?php 
                                                $sql = "SELECT * FROM candidates";
                                                $result = mysqli_query($conn, $sql);

                                                if ($total = mysqli_num_rows($result)) {
                                                    echo ' <h2 class="m-b-0">'.$total.'</h2>';

                                                }else{
                                                    echo ' <h2 class="m-b-0">No Data</h2>';
                                                }
                                            ?>
                                            <p class="m-b-0 text-muted">Total Candidates</p>
                                        </div>
                                    </div>
                                </div>
                    </div>
                 </div>
                 <div class="col-md-6 col-lg-3">
                            
                            <div class="card">
                                <div class="card-body">
                                <div class="media align-items-center">
                                    <div class="avatar avatar-icon avatar-lg avatar-cyan">
                                        <i class="anticon anticon-team"></i>
                                    </div>
                                    <div class="m-l-15">
                                    <?php 
                                            $sql = "SELECT * FROM tbl_archive";
                                            $result = mysqli_query($conn, $sql);

                                            if ($total_withdraw = mysqli_num_rows($result)) {
                                                echo ' <h2 class="m-b-0">'.$total_withdraw .'</h2>';

                                            }else{
                                                echo ' <h2 class="m-b-0">No Data</h2>';
                                            }
                                        ?>
                                        <p class="m-b-0 text-muted">Total Withdrawal of Candidacy</p>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                
            </div>
            <?php endif ?>


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
    //Donut Chart
    const donutChart = document.getElementById("donut-chart");
    const donutCtx = donutChart.getContext('2d');
    
    const donutData = {
        labels:  <?php echo $chartLabel ?>,
            datasets: [
            {
                fill: true,
                backgroundColor: ['#800080',' blue', 'yellow', 'red', 'green'],
                pointBackgroundColor : ['#800080',' blue', 'yellow', 'red', 'green'],
                data: <?php echo $chartData ?>
            }
        ]
    };
    const donutConfig = new Chart(donutCtx, {
        type: 'doughnut',
        data: donutData,
        options: {
            maintainAspectRatio: false,
            hover: {mode: null},
            cutoutPercentage: 45
        }
    });
</script>

<script>

    //Bar Chart
    const barChart = document.getElementById("bar-chart");
    const barCtx = barChart.getContext('2d');
    barChart.height = 120;
    const barConfig = new Chart(barCtx, {
        type: 'bar',
        data: {
        labels: <?php echo  $chart_student ?>,
        datasets: [{
            label: 'Registered Students',
            backgroundColor: ['#800080',' blue', 'yellow', 'red', 'green'],
            borderWidth: 0,
            data: <?php echo $chart ?>
        },
        {
            label: 'Total Votes',
            backgroundColor: ['green'],
            borderWidth: 0,
            //labels: <?= $chartLabels ?>,
            data: <?= $chartDatas ?>
            }]
        },
        
        options: {
            scaleShowVerticalLines: false,
            responsive: true,
            scales: {
                xAxes: [{
                    categoryPercentage: 0.100,
                    barPercentage: 0.70,
                    display: true,
                    scaleLabel: {
                        display: false,
                        labelString: 'Voter'
                    },
                    gridLines: false,
                    ticks: {
                        display: true,
                        beginAtZero: true,
                        fontSize: 13,
                        padding: 10
                    }
                }],
                yAxes: [{
                    categoryPercentage: 0.35,
                    barPercentage: 0.70,
                    display: true,
                    scaleLabel: {
                        display: false,
                        labelString: 'Value'
                    },
                    gridLines: {
                        drawBorder: false,
                        offsetGridLines: false,
                        drawTicks: false,
                        borderDash: [3, 4],
                        zeroLineWidth: 1,
                        zeroLineBorderDash: [3, 4]
                    },
                    ticks: {
                        max: 100,                            
                        stepSize: 20,
                        display: true,
                        beginAtZero: true,
                        fontSize: 13,
                        padding: 10
                    }
                }]
            }
        }
    });

</script>

</body>

</html>