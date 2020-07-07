<?php

	if ( isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['department']) )
	{

		$firstName = htmlspecialchars($_POST['fname']);
        $firstName = strtolower($firstName);
        $firstName = ucfirst($firstName);
        
        $lastName = htmlspecialchars($_POST['lname']);
        $lastName = strtolower($lastName);
        $lastName = ucfirst($lastName);

        $email = strtolower($_POST['email']);

		$department = $_POST['department'];
		$department_id = (int)$department;

		require '../dbConnect.php';
		$db = dbAccess();

        $query = "INSERT INTO EMPLOYEES (department_id, first_name, last_name, email) VALUES (" . $department_id . ", '" . $firstName . "', '" . $lastName . "', '" . $email . "')";
		$statement = $db->prepare($query);
        $statement->execute();
        
        $result = $statement->rowCount();

		if($result == 1){
			echo 'Employee Added!';
		}
		else{
			echo 'Oops! Something went wrong!';
		}
	}
	else{
		echo "Can not add employee! Contact Database Admin!";
	}

?>