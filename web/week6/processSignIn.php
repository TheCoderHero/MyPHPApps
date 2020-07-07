<?php
	session_start();

	include 'dbConnect.php';
	$db = dbAccess();

	$name = htmlspecialchars($_POST['uname1']);
	$name = strtolower($name);

	$pass = $_POST['pass1'];
	$hash = password_hash($pass, PASSWORD_DEFAULT);

	if( password_verify($pass, $hash) ){
		$statement = $db->prepare("SELECT * FROM USERS WHERE user_name = '" . $name . "' AND hash = '" . $hash . "'");
		$statement->execute();
	}

	$total = $db->query("SELECT COUNT (*) FROM USERS WHERE user_name = '" . $name . "' AND hash = '" . $hash . "'");
	$result = $total->fetchColumn();

	if($result < 1){
		$login = 0;
		echo $login;
	}
	else {
		$login = 1;
		echo $login;
		$row = $statement->fetch(PDO::FETCH_ASSOC);
		$_SESSION['id'] = $row['access'];
	}
?>