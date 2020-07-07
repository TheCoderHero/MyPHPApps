<?php

	if ( isset($_POST['user1']) && isset($_POST['password1']) && isset($_POST['access1']) )
	{

		$user = htmlspecialchars($_POST['user1']);
		$user = strtolower($user);

		$pass = $_POST['password1'];
		$hash = password_hash($pass, PASSWORD_DEFAULT);

		$access = $_POST['access1'];
		$access_num = (int)$access;

		require '../dbConnect.php';
		$db = dbAccess();

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
	}
	else{
		echo "Can not add user! Contact Database Admin!";
	}

?>