<?php

	session_start();

	if ( isset($_POST['uname1']) && isset($_POST['pass1']) ){
		$username = $_POST['uname1'];
		$username = htmlspecialchars($username);
		$username = strtolower($username);
		$password = $_POST['pass1'];

		require("dbConnect.php");
		$db = dbAccess();

		$query = 'SELECT HASH FROM USERS WHERE user_name = :user_name';
		$statement = $db->prepare($query);
		$statement->bindValue(':user_name', $username);
		$result = $statement->execute();

		if($result){
			$row = $statement->fetch();
			$hashDBPassword = $row['hash'];

			if ( password_verify($password, $hashDBPassword)){
				echo "1";
				$_SESSION['id'] = $row['access'];
			}
			else{
				echo "0";
			}
		}
		else{
			echo "0";
		}
	}

?>