<?php
include 'server/servers.php';
function get_Codes() {

	$data = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWFYZ1234567890';
    $random_pass = array();
    $string_variable = strlen($data) - 1;

    for($i=0; $i<6; $i++){
        $n = rand(0,$string_variable);
        $random_pass[] = $data[$n];
    }
    return(implode($random_pass));

}




   //Candidates                                                     
   $query = "SELECT count(*) as marks_percentage, dsn_id FROM candidates GROUP BY dsn_id;";  
   $result =$conn->query($query);
   {
       $label = array();
       $percentage = array();

       while($row = $result->fetch_assoc()){
           $label[] = $row['dsn_id']. "%";
           $percentage[] = $row['marks_percentage'];


       }

   }
   $chartLabel = json_encode($label);
   $chartData = json_encode($percentage);
   //Vote Count
   $query1 = "SELECT count(*) as marks_percentage, dept_id FROM votecount GROUP BY dept_id;";
   $result1 =$conn->query($query1);
   {
       $labels = array();
       $percent = array();

       while($row = $result1->fetch_assoc()){
           $labels[] = $row['dept_id'];
           $percent[] = $row['marks_percentage'];


       }

   }
   $chartLabels = json_encode($labels);
   $chartDatas = json_encode($percent);

   //Registered Student

   $q = "SELECT count(*) as marks_percentage, dept_id FROM students GROUP BY dept_id;";
   $res =$conn->query($q);
   {
       $student = array();
       $percents = array();

       while($row = $res->fetch_assoc()){
           $student[] = $row['dept_id'];
           $percents[] = $row['marks_percentage'];


       }

   }
   $chart_student = json_encode($student);
   $chart = json_encode($percents);


?>