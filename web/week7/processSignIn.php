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

		$query2 = 'SELECT ACCESS FROM USERS WHERE user_name = :user_name';
		$statement2 = $db->prepare($query2);
		$statement2->bindValue(':user_name', $username);
		$result2 = $statement2->execute();

		if($result){
			$row = $statement->fetch();
			$hashDBPassword = $row['hash'];

			if ( password_verify($password, $hashDBPassword)){
				$row = $statement2->fetch();
				$_SESSION['id'] = $row['access'];
				echo "1";
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