<?php
	require '../dbConnect.php';
	$db = dbAccess();

	$statement = $db->prepare("DELETE FROM ISSUES WHERE ISSUE_ID =" . $_POST['id']);
	$statement->execute();

	echo 'Issue Deleted!';
?>