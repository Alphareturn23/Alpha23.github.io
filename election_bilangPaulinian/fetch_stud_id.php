<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "election";
$output = '';
$search="";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($conn, $_POST["query"]);
	$sql = "SELECT * FROM students WHERE student_id='$search'";
}
else
{
	$search = "0";
	$sql = "SELECT * FROM students WHERE student_id='$search'";
}

$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo "<span style='color:red'><b>Student ID is TAKEN!</b></span>";
}else {
	if ($search != 0) {
		echo "<span style='color:#00ae2c'><b>Student ID is not yet REGISTERED</b></span>";
	}
}
$conn->close();