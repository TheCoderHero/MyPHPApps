<?php

	require '../dbConnect.php';
	$db = dbAccess();
	
	$l_name = htmlspecialchars($_POST['lname']);
	$l_name = strtolower($l_name);
	$l_name = ucwords($l_name);

    $query = "SELECT * FROM SCORECARD JOIN DEPARTMENTS USING (DEPARTMENT_ID) JOIN EMPLOYEES USING (EMPLOYEE_ID) WHERE EMPLOYEES.LAST_NAME = '" . $l_name . "' ORDER BY EMPLOYEE_ID";
	$statement = $db->prepare($query);
    $statement->execute();
    
    $total_rows = $statement->rowCount();

    if($total_rows > 0){
        echo '<table class="w3-table-all w3-hoverable w3-card-4">
        <tr class="w3-orange">
            <th>Dept</th>
            <th>Employee</th>
            <th>Measurable</th>
            <th>Goal</th>
            <th>Date</th>
            <th>Update</th>
        </tr>';
    
    
        while($row = $statement->fetch(PDO::FETCH_ASSOC)){
            echo '<tr>';
                echo '<th>' . $row['function'] . '</th>';
                echo '<th>' . $row['first_name'] . ' ' . $row['last_name'] . '</th>';
                echo '<th>' . $row['measurable'] . '</th>';
                echo '<th>' . $row['goal'] . '</th>';
                echo '<th>' . $row['date'] . '</th>';
                echo '<th>' . $row['update'] . '</th>';
            echo '</tr>';
        };
    }
    else{
        echo '<table class="w3-table-all w3-hoverable w3-card-4">
        <tr class="w3-orange">
            <th>Dept</th>
            <th>Employee</th>
            <th>Measurable</th>
            <th>Goal</th>
            <th>Date</th>
            <th>Update</th>
        </tr>';
        echo '<tr>';
            echo '<td colspan = "6">No Data Found!</td>';
        echo '</tr>';
    }
    echo '</table>';
    
?>