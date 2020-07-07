<?php
	require '../dbConnect.php';
	$db = dbAccess();

	$statement = $db->prepare("SELECT * FROM USERS ORDER BY USER_ID ASC");
	$statement->execute();

	$rows = $db->prepare("SELECT COUNT (*) FROM USERS");
	$rows->execute();

	$total_rows = $rows->fetchColumn();


	echo '<table class="w3-table-all w3-hoverable w3-card-4">';
		echo '<tr class="w3-orange">';
				echo '<th>Delete</th>';
				echo '<th>Username</th>';
				echo '<th>Password</th>';
				echo '<th>Acces</th>';
				echo '<th>Update</th>';
		echo '</tr>';

	if($total_rows > 0){
		while($row = $statement->fetch(PDO::FETCH_ASSOC)){
			echo '<tr>';
				echo '<td><button class="w3-button w3-circle w3-red btn_del" data-id1=' . $row['user_id'] . '>-</button></td>';
				echo '<td class="user_name" data-id2=' . $row['user_id'] . ' contenteditable>' . $row['user_name'] . '</td>';
				echo '<td class="password" data-id3=' . $row['user_id'] . ' contenteditable>' . $row['password'] . '</td>';
				echo '<td class="edit_access" data-id4=' . $row['user_id'] . ' contenteditable>' . $row['access'] . '</td>';
				echo '<td><button class="w3-button w3-circle w3-gray btn_upd" data-id5=' . $row['user_id'] . '><i class="fas fa-edit"></i></button></td>';
			echo '</tr>';
		};
	}
	else{
		echo '<tr>';
			echo '<td colspan = "7">No Data Found!</td>';
		echo '</tr>';
	}
		echo '<tr><td colspan = "5">Add Users Below</td></tr>';
		echo '<tr>';
			echo '<td><button class="w3-button w3-circle w3-green" id="btn_add">+</button></td>';
			echo '<td id="user_name" contenteditable></td>';
			echo '<td id="password" contenteditable></td>';
			echo '<td id="edit_access" contenteditable></td>';
			echo '<td></td>';
		echo '</tr>';
	echo '</table>';
?>