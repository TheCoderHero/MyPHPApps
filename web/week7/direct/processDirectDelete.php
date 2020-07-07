<?php
	require '../dbConnect.php';
    $db = dbAccess();

    if ( isset($_POST['id']) ){
        $id = $_POST['id'];
        $id = (int)$id;

        $query = "DELETE FROM EMPLOYEES WHERE EMPLOYEE_ID = " . $id;
        $statement = $db->prepare($query);
        $statement->execute();

        $row = $statement->rowCount();

        if($row == 1){
            echo "Employee Deleted!";
        }
        else{
            echo "Could not delete employee!?!";
        }
    }
    else{
        echo "Oops! Something Went Wrong! Contact Database Admin!";
    }
    
?>