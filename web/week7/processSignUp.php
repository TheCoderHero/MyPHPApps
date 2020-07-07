<?php

	require 'dbConnect.php';
	$db = dbAccess();

	$name = htmlspecialchars($_POST['uname1']);
	$name = strtolower($name);

	$pass = $_POST['pass1'];
	$hash = password_hash($pass, PASSWORD_DEFAULT);

	if( password_verify($pass, $hash) ){
		$statement = $db->prepare("INSERT INTO USERS (user_name, password, hash, access) VALUES ('" . $name . "', '" . $pass . "', '" . $hash . "', 2)");
		$statement->execute();
	}

	$result = $db->prepare("SELECT COUNT (*) FROM USERS WHERE USER_NAME = '" . $name . "' AND HASH = '" . $hash . "'");
	$result->execute();

	$total = $result->fetchColumn();

	if($total < 1){
		$login = 0;
		echo $login;
	}
	else{
		$login = 1;
		echo $login;
	}

?>