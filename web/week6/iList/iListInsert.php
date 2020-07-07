<?php

	session_start();
	require '../dbConnect.php';
	$db = dbAccess();

	$priority = $_POST['priority1'];
	$priority_num = (int)$priority;

	$issue = $_POST['issue1'];

	$fname = htmlspecialchars($_POST['fname1']);
	$fname = strtolower($fname);
	$fname = ucwords($fname);

	$lname = htmlspecialchars($_POST['lname1']);
	$lname = strtolower($lname);
	$lname = ucwords($lname);

	$statement = $db->prepare("INSERT INTO ISSUES (employee_id, priority_num, submit, issue, f_name, l_name) VALUES (" . $_SESSION['id'] . "," . $priority_num . ", CURRENT_DATE, '" . $issue . "', '" . $fname . "', '" . $lname . "')");
		$statement->execute();
		echo 'Issue Submitted!';

?>