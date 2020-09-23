<?php
	session_start();
	include('db_connection.php');
	include ('user.php');

	$email = $_POST["email"];
	$password = $_POST["password"];

	$filter =['email' => $email];						//filter records on entered email
	
	$query = new MongoDB\Driver\Query($filter);			//create a query to filter
	
	try{
		$executeQuery = $connection -> executeQuery($databaseName, $query);	//execute the query
		$arrayUser = $executeQuery -> toArray();								//get data to an array
		
		if (!(empty($arrayUser))){						//check whether the array is empty
			$userName = $arrayUser[0] -> name;			//get name of the user from the array
			$userEmail = $arrayUser[0] -> email;		//get email from the array
			$userGender = $arrayUser[0]->gender;		//get gender from the array
			$userPassword = $arrayUser[0]->password;	//get password from the array
			if(!(password_verify($password, $userPassword))){			// check whether the entered password is correct
				echo "<script>window.location.href='login.php'; alert('Login Failed!  You have entered a wrong password. Please Try Again!');</script>";	//display login failed message due to incorrect password
			}else{
				$_SESSION['name'] = $userName;			//create session variable for logged in user name
				$_SESSION['email'] = $userEmail;		//create session variable for logged in user email
				$_SESSION['gender'] = $userGender;		//create session variable for logged in user gender
				echo "<script>window.location.href='dashboard.php';alert('You have logged-in successfully!');</script>";
			}
		}else{
			echo "<script>window.location.href='login.php'; alert('Login Failed! Incorrect email. Please Try Again!');</script>";	//display login failed message due to incorrect email
		}	
	}catch(MongoDB\Driver\Exception\Exception $ex){
		die("Error Occurred while Login!");
	}
?>



