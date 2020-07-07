<?php

	if ( isset($_POST['id1']) && isset($_POST['uname1']) && isset($_POST['pass1']) && isset($_POST['access1']) )
	{

		//ID
		$id = $_POST['id1'];
		$id_num = (int)$id;

		//Username
		$username = $_POST['uname1'];
		$username = htmlspecialchars($username);
		$username = strtolower($username);

		//Password
		$password = $_POST['pass1'];

		//Hash
		$hash = password_hash($password, PASSWORD_DEFAULT);

		//ACCESS
		$access = $_POST['access1'];
		$access_num = (int)$access;

		require("../dbConnect.php");
		$db = dbAccess();

		$statement = $db->prepare("UPDATE USERS SET USER_NAME = '" . $username . "', PASSWORD = '" . $password . "', HASH = '" . $hash . "', ACCESS = " . $access_num . " WHERE USER_ID = " . $id_num);
		$statement->execute();

		$query = 'SELECT HASH FROM USERS WHERE user_name = :user_name';
		$statement2 = $db->prepare($query);
		$statement2->bindValue(':user_name', $username);
		$result = $statement2->execute();

		if($result)
		{
			$row = $statement2->fetch();
			$hashDBPassword = $row['hash'];

			if ( password_verify($password, $hashDBPassword) )
			{
				echo "1";
			}
			else
			{
				echo "0";
			}
		}
		else
		{
			echo "0";
		}
	}

?>