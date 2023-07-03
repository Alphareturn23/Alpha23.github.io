<?php

function getConnection()
{
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "election";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		die("Connection Failed: ".$conn->connect_error);
	}

	return $conn;
}

function get($table_name)
{
	$conn = getConnection();
	$sql = "SELECT * FROM $table_name";
	$result = $conn->query($sql);
	return $result;
}

function get_where($table_name, $id)
{
	$conn = getConnection();
	$sql = "SELECT * FROM $table_name where id=$id";
	$result = $conn->query($sql);
	return $result;
}

function get_where_custom($table_name, $column, $value)
{
	$conn = getConnection();
	$sql = "SELECT * FROM $table_name where ".$column."='".$value."'";
	$result = $conn->query($sql);
	return $result;
}

function insert($data, $table_name) 
{
	$conn = getConnection();
	$fields = ""; $values = "";

	foreach ($data as $key => $value) {
		$fields = $fields."$key".",";
		$values = $values."'".$value."',";
	}

	$cnt_fields = strlen($fields);
	$cnt_values = strlen($values);

	$fields = substr($fields, 0, $cnt_fields-1);
	$values = substr($values, 0, $cnt_values-1);

	$sql = "INSERT INTO $table_name (".$fields.") values (".$values.")";

	if ($conn->query($sql) === TRUE) {
    	$result =  "Record created successfully";
	} else {
	    $result = "Error: " . $sql . "<br>" . $conn->error;
	}
	return $result;
}

function update($data, $id, $table_name) 
{
	$conn = getConnection();
	$str="";

	foreach ($data as $key => $value) {
		$str = $str.$key."='".$value."',";
	}

	$cnt_str = strlen($str);

	$str = substr($str, 0, $cnt_str-1);

	$sql = "UPDATE $table_name set ".$str." where id='".$id."'";

	if ($conn->query($sql) === TRUE) {
    	$result =  " ";
	} else {
	    $result = "Error: " . $sql . "<br>" . $conn->error;
	}
	return $result;
}

function delete($id, $table_name)
{
	$conn = getConnection();
	$sql = "DELETE FROM $table_name where id=$id";
	if ($conn->query($sql) == TRUE) {
		$result = "Record deleted successfully";
	} else {
		$result = "Error: " . $sql . "<br>" . $conn->error;	
	}
	return $result;
}

function custom_query($mysql_query)
{
	//for select statements only
	$conn = getConnection();
	$sql = $mysql_query;
	$result = $conn->query($sql);	
	return $result;
}

function base_url()
{
	$project_name = "bilangpaulinian";
	return "http://" . $_SERVER['SERVER_NAME'].'/'.$project_name.'/'; 
}

function get_where_double($col1, $value1, $col2, $value2)
{
	$conn = getConnection();
	$sql = "SELECT * FROM $table_name where $col1=$value1 and $col2=$value2";
	$result = $conn->query($sql);
	return $result;
}

function _hash_string($str)
{
	$hashed_string = password_hash($str, PASSWORD_BCRYPT, array('cost'=>11));
	return $hashed_string;
}

function _verify_hash($plain_text_str, $hashed_string)
{
	$result = password_verify($plain_text_str, $hashed_string);
	return $result; //[1]TRUE or [0]FALSE
}

function _get_pword_from_username($username, $table_name) 
{
	$user_data = get_where_custom("users", "username", $username);
	foreach ($user_data as $key => $row) {
		return $password = $row['password'];
	}
	
}

function generate_random_string($length)
{
	$characters = '23456789abcdefghjkmnpqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ';
	$randomString = '';
	for ($i=0;$i< $length; $i++){
		$randomString .= $characters[rand(0, strlen($characters) - 1)];
	}
	return $randomString;
}

function _get_photo_from_id($table_name, $id) {
	$user_data = get_where($table_name, $id);
	foreach ($user_data as $key => $row) {
		return $photo = $row['photo'];
	}
}


function count_rows($table_name)
{
	$conn = getConnection();
	$sql = "SELECT * FROM $table_name";
	$result = $conn->query($sql);
	$rowcount=mysqli_num_rows($result);
	return $rowcount;
}

//election2022
function _get_deptid_from_studentid($table_name, $id) {
	$user_data = get_where_custom($table_name, "student_id", $id);
	foreach ($user_data as $key => $row) {
		return $dept_id = $row['dept_id'];
	}
}

function _get_fullname_from_studentID($studentID, $table_name) 
{
	$student_data = get_where_custom("students", "student_id", $studentID);
	foreach ($student_data as $key => $row) {
		return $fullname = $row['lname'].", ".$row['fname'];
	}
	
}

function _get_course_from_studentID($studentID, $table_name) 
{
	$student_data = get_where_custom("students", "student_id", $studentID);
	foreach ($student_data as $key => $row) {
		return $course = $row['course'];
	}
	
}

function _get_year_from_studentID($studentID, $table_name) 
{
	$student_data = get_where_custom("students", "student_id", $studentID);
	foreach ($student_data as $key => $row) {
		return $course = $row['year'];
	}
	
}


function _get_fullname_from_CandidateID($candidate_id)
{
	$custom_query = "SELECT candidates.candidates_id, candidates.student_id, candidates.position_id, students.fname, students.lname
	FROM candidates
	INNER JOIN students ON candidates.student_id=students.student_id
	WHERE candidates.candidates_id='$candidate_id'";
	$student_data = custom_query($custom_query);
	foreach ($student_data as $key => $row) {
		return $fullname = $row['lname'].", ".$row['fname'];
	}
	
}

function _get_position_from_positionID($positionID, $table_name) 
{
	$student_data = get_where_custom("positions", "position_id", $positionID);
	foreach ($student_data as $key => $row) {
		return $fullname = $row['position_title'];
	}
	
}

function _get_yearlevel_from_candidateID($candidate_id) 
{
	$custom_query = "SELECT candidates.candidates_id, candidates.student_id, candidates.position_id, students.fname, students.lname, students.year
	FROM candidates
	INNER JOIN students ON candidates.student_id=students.student_id
	WHERE candidates.candidates_id='$candidate_id'";
	$student_data = custom_query($custom_query);
	foreach ($student_data as $key => $row) {
		return $year_level = $row['year'];
	}	
}

function _get_photo_from_candidateID($candidateID, $table_name) 
{
	$candidate_data = get_where_custom("candidates", "candidates_id", $candidateID);
	foreach ($candidate_data as $key => $row) {
		return $photo = "../uploads/candidates/".$row['picture'];
	}
	
}

function _get_photo_from_candidateID2($candidateID, $table_name) 
{
	$candidate_data = get_where_custom("candidates", "candidates_id", $candidateID);
	foreach ($candidate_data as $key => $row) {
		return $photo = "../uploads/candidates/".$row['picture'];
	}
	
}

function count_candidatevote($table_name, $candidate_id)
{
	$conn = getConnection();
	$sql = "SELECT * FROM $table_name where candidates_id='$candidate_id'";
	$result = $conn->query($sql);
	$rowcount=mysqli_num_rows($result);
	return $rowcount;
}

function count_candidatevotedept($candidate_id, $dept_id)
{
	$conn = getConnection();
	$sql= "SELECT votes.student_id, votes.candidates_id, students.dept_id, students.student_id
	FROM votes
	INNER JOIN students ON votes.student_id=students.student_id
	WHERE students.dept_id='$dept_id'
	AND votes.candidates_id='$candidate_id'";
	$result = $conn->query($sql);
	$rowcount=mysqli_num_rows($result);
	return $rowcount;
}


function count_votesperyear($dept_id, $year_level)
{
	$query = "SELECT votecount.student_id, votecount.dept_id, students.year
	FROM votecount
	INNER JOIN students ON votecount.student_id=students.student_id
	WHERE students.year='$year_level'
	AND votecount.dept_id='$dept_id'";
	$conn = getConnection();
	$sql = $query;
	$result = $conn->query($sql);
	$rowcount=mysqli_num_rows($result);
	return $rowcount;
}


function count_sasterows($table_name)
{
	$conn = getConnection();
	$sql = "SELECT * FROM $table_name where dept_id='2'";
	$result = $conn->query($sql);
	$rowcount=mysqli_num_rows($result);
	return $rowcount;
}

//created by
//Carlos L. Babaran Jr.
//02-15-2018
//...to be continued
?>