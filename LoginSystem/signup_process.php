<?php
    session_start();
	include 'db_connection.php';
	include ('user.php');
    $insert = new MongoDB\Driver\BulkWrite;

    $name = $_POST["name"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $password = $_POST["password"];
    $confirmPw = $_POST["cpw"];
	

        if(!($password==$confirmPw)){	//check confirmed password are correct
			echo "<script>window.location.href='signup.php';alert('Sign-Up Failed! The passwords are not matching. Please Try Again!');</script>";	//display signup failed message due to incorrect confirm password
        }
        else{
            if(preg_match("/[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+.[a-zA-Z]{2,4}/", $email)){	//checking the email in correct form
				
				
				$filter =['email' => $email];					//filter records on entered email
				$query = new MongoDB\Driver\Query($filter);		//create a query to filter
				try{
					$executeQuery = $connection -> executeQuery($databaseName, $query);			//execute the query
					$arrayUser = $executeQuery -> toArray();	//get data to an array
					
					if (!(empty($arrayUser))){			//check whether the array is empty
						echo "<script>window.location.href='signup.php';alert('Sign-Up Failed! Your email has already signed-up. Please Try Again!');</script>";	//display signup failed message due to email has already entered
					}else{
						$enPassword = password_hash($password,PASSWORD_DEFAULT); 			//encrypt the password before create the object
 						
						$newUser = new  user();		//create an object on user class
						$newUser ->setName($name);
						$newUser ->setEmail($email);
						$newUser ->setGender($gender);
						$newUser ->setPassword($enPassword);
							
						$user = [								// add created user object
							'_id' => new MongoDB\BSON\ObjectId,
							'name' => $newUser->getName(),
							'email' => $newUser->getEmail(),
							'gender' => $newUser->getGender(),
							'password' => $newUser->getPassword()
						];
						try {
							$insert -> insert($user);			//insert the array
							$executeInsert = $connection -> executeBulkWrite($databaseName,$insert);
							echo "<script>window.location.href='login.php';alert('You have signed-up successfully!');</script>";		//display signup success message			
						} catch (MongoDB\Driver\Exception\Exception $ex){
							die("Error Occurred While signing up!");
						} 
							}	
				}catch(MongoDB\Driver\Exception\Exception $ex){
					die("Error Occurred while signing up!");
				}
				
				             
            }
            else{
				echo "<script>window.location.href='signup.php';alert('Sign Failed! Incorrect email. Please Try Again!');</script>";	//display signup failed message due to incorrect email   
            }
        }
?>



