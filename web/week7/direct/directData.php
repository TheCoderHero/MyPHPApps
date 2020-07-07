<?php

    session_start();
    $access = $_SESSION['id'];

    require '../dbConnect.php';
    $db = dbAccess();

    $statement = $db->prepare("SELECT * FROM EMPLOYEES INNER JOIN DEPARTMENTS ON EMPLOYEES.DEPARTMENT_ID = DEPARTMENTS.DEPARTMENT_ID ORDER BY EMPLOYEE_ID ASC");
    $statement->execute();

    $total_rows = $statement->rowCount();

    if($access == "1"){
        echo '<table class="w3-table-all w3-hoverable w3-card-4">';
                echo '<tr class="w3-orange">';
                    echo '<th>Delete</th>';
                    echo '<th>First Name</th>';
                    echo '<th>Last Name</th>';
                    echo '<th>Email</th>';
                    echo '<th>Department</th>';
                    echo '<th>Update</th>';
                echo '</tr>';

        if($total_rows > 0){
            while($row = $statement->fetch(PDO::FETCH_ASSOC)){
                    echo '<tr>';
                        echo '<td><button class="w3-button w3-circle w3-red btn_del" data-id1=' . $row['employee_id'] . '>-</button></td>';
                        echo '<td class="first_name" data-id2=' . $row['employee_id'] . ' contenteditable>' . $row['first_name'] . '</th>';
                        echo '<td class="last_name" data-id3=' . $row['employee_id'] . ' contenteditable>' . $row['last_name'] . '</th>';
                        echo '<td class="email" data-id4=' . $row['employee_id'] . ' contenteditable>' . $row['email'] . '</th>';
                        echo '<td data-id5=' . $row["employee_id"] . ' contenteditable>
                        <select class="w3-select department" name="department" id="department">
                            <option value="' . $row["department_id"] . '" selected>' . $row['function'] . '</option>
                            <option value="1">Leadership</option>
                            <option value="2">Operations</option>
                            <option value="3">Information Technology</option>
                            <option value="4">Telecommunications</option>
                            <option value="5">Cabling</option>
                            <option value="6">Sales</option>
                            <option value="7">Engineering</option>
                        </select>
                        </td>';
                        echo '<td><button class="w3-button w3-circle w3-gray btn_upd" data-id6=' . $row['employee_id'] . '><i class="fas fa-edit"></i></button></td>';
                    echo '</tr>';
            };
        }
        else{
            echo '<tr>';
				echo '<td colspan = "6">No Data Found!</td>';
			echo '</tr>';
        }
        echo '<tr><td colspan = "6">Add Employee Below</td></tr>';
			echo '<tr>';
				echo '<td><button class="w3-button w3-circle w3-green" id="btn_add">+</button></td>';
				echo '<td id="f_name" contenteditable></td>';
				echo '<td id="l_name" contenteditable></td>';
				echo '<td id="email" contenteditable></td>';
                echo '<td>
                        <select class="w3-select" name="department" id="department">
                            <option value="" disabled selected>Department</option>
                            <option value="1">Leadership</option>
                            <option value="2">Operations</option>
                            <option value="3">Information Technology</option>
                            <option value="4">Telecommunications</option>
                            <option value="5">Cabling</option>
                            <option value="6">Sales</option>
                            <option value="7">Engineering</option>
                        </select>
                        </td>';
                echo '<td></td>';
			echo '</tr>';
    }
    else{
        echo '<table class="w3-table-all w3-hoverable w3-card-4">';
            echo '<tr class="w3-orange">';
                echo '<th>Department</th>';
                echo '<th>First Name</th>';
                echo '<th>Last Name</th>';
                echo '<th>Email</th>';
            echo '</tr>';

        while($row = $statement->fetch(PDO::FETCH_ASSOC)){
            echo '<tr>';
                echo '<th>' . $row['function'] . '</th>';
                echo '<th>' . $row['first_name'] . '</th>';
                echo '<th>' . $row['last_name'] . '</th>';
                echo '<th>' . $row['email'] . '</th>';
            echo '</tr>';
        };
    }
    echo '</table>';

?>