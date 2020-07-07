<?php

	session_start();

	require '../dbConnect.php';
	$db = dbAccess();

	$id = $_POST['id1'];
	$id_num = (int)$id;

	$priority = $_POST['priority1'];
	$priority_num = (int)$priority;

	$issue = $_POST['issue1'];

	$para1 = htmlspecialchars($_POST['fname1']);
	$para1 = strtolower($para1);
	$para1 = ucwords($para1);

	$para2 = htmlspecialchars($_POST['lname1']);
	$para2 = strtolower($para2);
	$para2 = ucwords($para2);

	$statement = $db->prepare("UPDATE ISSUES SET EMPLOYEE_ID =" . $_SESSION['id'] . ", PRIORITY_NUM =" . $priority_num . ", ISSUE = '" . $issue . "', F_NAME = '" . $para1 . "', L_NAME = '" . $para2 . "' WHERE ISSUE_ID = " . $id_num);
	$statement->execute();

	echo 'Update Success!';
?>