<?php 
	include ('../server/servers.php');

	$user_id	= $conn->real_escape_string($_POST['user_id']);
	$password	= sha1($conn->real_escape_string($_POST['password']));


	if($user_id != '' AND $password != ''){
		$query 		= "SELECT * FROM accounts WHERE account_id = '$user_id' AND password = '$password'";
		
		$result 	= $conn->query($query);
		
		if($result->num_rows){
			while ($row = $result->fetch_assoc()) {
				$_SESSION['id'] = $row['id'];
			    $_SESSION['firstname'] = $row['firstname'];
			    $_SESSION['lastname'] = $row['lastname'];
				$_SESSION['user_id'] = $row['account_id'];
				$_SESSION['dept_id'] = $row['dept_id'];
				$_SESSION['role'] = $row['role_as'];
				//$_SESSION['avatar'] = $row['avatar'];
			}

			$_SESSION['message'] = 'Welcome,' . ' ' . $_SESSION['role'] .'!';
			$_SESSION['success'] = 'success';

            header('location: ../dashboard.php');

		}else{
			$_SESSION['message'] = 'User ID or password is incorrect!';
			$_SESSION['success'] = 'danger';
            header('location: ../login.php');
		}
	}else{
		$_SESSION['message'] = 'User ID or password is empty!';
		$_SESSION['success'] = 'danger';
        header('location: ../login.php');
	}

    

	$conn->close();