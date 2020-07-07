<?php

    if ( isset($_POST['id']) && isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['department']) ){

		$id = $_POST['id'];
		$id = (int)$id;

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
        
        $query = "UPDATE EMPLOYEES SET DEPARTMENT_ID = " . $department . ", FIRST_NAME = '" . $firstName . "', LAST_NAME = '" . $lastName . "', EMAIL = '" . $email . "' WHERE EMPLOYEE_ID = " . $id;

		$statement = $db->prepare($query);
        $statement->execute();
        
        $result = $statement->rowCount();

		if($result == 1){
            echo "Employee Update Success!";
        }
        else{
            echo "Could Not Update Employee!";
        }

    }
    else{
        echo "Oops! Something Went Wrong! Contact Database Admin!";
    }

?>