<?php

	session_start();
	$access = $_SESSION['id'];

	require '../dbConnect.php';
	$db = dbAccess();

	$search = htmlspecialchars($_POST['month']);
	$search_num = (int)$search;

	$statement = $db->prepare("SELECT * FROM ISSUES WHERE EXTRACT(MONTH FROM SUBMIT) = " . $search_num . "ORDER BY PRIORITY_NUM ASC");
	$statement->execute();

	$rows = $db->prepare("SELECT * FROM ISSUES WHERE EXTRACT(MONTH FROM SUBMIT) = " . $search_num . "ORDER BY PRIORITY_NUM ASC");
	$rows->execute();

	$total = $rows->fetchColumn();


	if($access == "1"){
		echo '<table class="w3-table-all w3-hoverable w3-card-4">';
			echo '<tr class="w3-orange">';
					echo '<th>Delete</th>';
					echo '<th>P#</th>';
					echo '<th>Issue</th>';
					echo '<th>Submit Date</th>';
					echo '<th>First Name</th>';
					echo '<th>Last Name</th>';
					echo '<th>Update</th>';
			echo '</tr>';

		if($total > 0){
			while($row = $statement->fetch(PDO::FETCH_ASSOC)){
				echo '<tr>';
					echo '<td><button class="w3-button w3-circle w3-red btn_del" data-id1=' . $row['issue_id'] . '>-</button></td>';
					echo '<td class="priority_num" data-id2=' . $row['issue_id'] . ' contenteditable>' . $row['priority_num'] . '</td>';
					echo '<td class="edit_issue" data-id3=' . $row['issue_id'] . ' contenteditable>' . $row['issue'] . '</td>';
					echo '<td>' . $row['submit'] . '</td>';
					echo '<td class="f_name" data-id4=' . $row['issue_id'] . ' contenteditable>' . $row['f_name'] . '</td>';
					echo '<td class="l_name" data-id5=' . $row['issue_id'] . ' contenteditable>' . $row['l_name'] . '</td>';
					echo '<td><button class="w3-button w3-circle w3-gray btn_upd" data-id6=' . $row['issue_id'] . '><i class="fas fa-edit"></i></button></td>';
				echo '</tr>';
			};
		}
		else{
			echo '<tr>';
				echo '<td colspan = "7">No Data Found!</td>';
			echo '</tr>';
		}
			echo '<tr><td colspan = "7">Add Issue Below</td></tr>';
			echo '<tr>';
				echo '<td><button class="w3-button w3-circle w3-green" id="btn_add">+</button></td>';
				echo '<td id="priority_id" contenteditable></td>';
				echo '<td id="new_issue_id" contenteditable></td>';
				echo '<td></td>';
				echo '<td id="f_name_id" contenteditable></td>';
				echo '<td id="l_name_id" contenteditable></td>';
				echo '<td></td>';
			echo '</tr>';
		echo '</table>';
	}
	else{
		echo '<table class="w3-table-all w3-hoverable w3-card-4">';
			echo '<tr class="w3-orange">';
					echo '<th>P#</th>';
					echo '<th>Issue</th>';
					echo '<th>Submit Date</th>';
					echo '<th>First Name</th>';
					echo '<th>Last Name</th>';
			echo '</tr>';

		if($total > 0){
			while($row = $statement->fetch(PDO::FETCH_ASSOC)){
				echo '<tr>';
					echo '<td>' . $row['priority_num'] . '</td>';
					echo '<td>' . $row['issue'] . '</td>';
					echo '<td>' . $row['submit'] . '</td>';
					echo '<td>' . $row['f_name'] . '</td>';
					echo '<td>' . $row['l_name'] . '</td>';
				echo '</tr>';
			};
		}
		else{
			echo '<tr>';
				echo '<td colspan = "7">No Data Found!</td>';
			echo '</tr>';
		}
	echo '</table>';
	}
?>