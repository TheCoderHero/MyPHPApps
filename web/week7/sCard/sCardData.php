<?php

    require '../dbConnect.php';
    $db = dbAccess();

    $statement = $db->prepare("SELECT * FROM SCORECARD JOIN DEPARTMENTS USING (DEPARTMENT_ID) JOIN EMPLOYEES USING (EMPLOYEE_ID) ORDER BY date ASC");
    $statement->execute();

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

    echo '</table>';
?>