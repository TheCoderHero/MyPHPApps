<?php
	require '../dbConnect.php';
	$db = dbAccess();

	$user = $_POST['user'];
	$user = strtolower($user);

	$insert = $db->prepare("SELECT COUNT (*) FROM USERS");
	$insert->execute();

	$total = $insert->fetchColumn();

	if($total > 1){
		$statement = $db->prepare("DELETE FROM USERS WHERE USER_NAME ='" . $user . "' AND ACCESS != 1");
		$statement->execute();

	$deleteSuccess = $db->prepare("SELECT COUNT (*) FROM USERS");
	$deleteSuccess->execute();

	$total_delete = $deleteSuccess->fetchColumn();
		if($total_delete == ($total - 1)){
			echo 'User Deleted!';
		}
		else {
			echo 'Can not delete admin account!';
		}

	}
	else {
		echo 'Delete Failed Contact Admin!';
	}
?>