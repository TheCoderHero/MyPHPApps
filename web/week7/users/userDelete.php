<?php
	require '../dbConnect.php';
	
	$db = dbAccess();
	$user = strtolower($_POST['user']);
	  
	$statement = $db->prepare('DELETE FROM USERS WHERE user_name = :user AND NOT ACCESS = 1 RETURNING user_name');
	$statement->execute(array('user' => $user));
	$deleted_user = $statement->fetchColumn();
  
	if($deleted_user == $user){
		echo 'User Deleted!';
		exit(0);
	} else {
		echo 'Can not delete admin account!';
		exit(0);
	}

	echo 'Delete Failed Contact Admin!';
?>