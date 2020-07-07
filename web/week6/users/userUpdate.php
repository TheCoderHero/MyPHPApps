<?php

'uname1=' + uname + '&pass1=' + pass + '&access1=' + access;

	require '../dbConnect.php';
	$db = dbAccess();

	$id = $_POST['id1'];
	$id_num = (int)$id;

	$user = $_POST['uname1'];
	$user = strtolower($user);

	$pass = $_POST['pass1'];
	$hash = sha1(md5($pass));

	$access = $_POST['access1'];
	$access_num = (int)$access;


	$statement = $db->prepare("UPDATE USERS SET USER_NAME = '" . $user . "', PASSWORD = '" . $pass . "', HASH = '" . $hash . "', ACCESS = " . $access_num . " WHERE USER_ID = " . $id_num);
	$statement->execute();

	$updateSuccess = $db->prepare("SELECT COUNT (*) FROM USERS WHERE USER_NAME = '" . $user . "' AND PASSWORD = '" . $pass . "' AND HASH = '" . $hash . "' AND ACCESS = " . $access_num);
	$updateSuccess->execute();

	$total_update = $updateSuccess->fetchColumn();

	if($total_update == 1){
		echo 'User Updated!';
	}
	else{
		echo 'Oops! Something went wrong!';
	}

?>