<?php

	require '../dbConnect.php';
	$db = dbAccess();

	$user = htmlspecialchars($_POST['user1']);
	$user = strtolower($user);

	$pass = $_POST['password1'];
	$hash = sha1(md5($pass));

	$access = $_POST['access1'];
	$access_num = (int)$access;

	$insert = $db->prepare("SELECT COUNT (*) FROM USERS");
	$insert->execute();

	$total = $insert->fetchColumn();

	$statement = $db->prepare("INSERT INTO USERS (user_name, password, access, hash) VALUES ('" . $user . "', '" . $pass . "', " . $access_num . ", '" . $hash . "')");
	$statement->execute();

	$insertSuccess = $db->prepare("SELECT COUNT (*) FROM USERS");
	$insertSuccess->execute();

	$total_insert = $insertSuccess->fetchColumn();

	if($total_insert == ($total + 1)){
		echo 'User Added!';
	}
	else{
		echo 'Oops! Something went wrong!';
	}

?>