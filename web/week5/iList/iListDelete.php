<?php
	require '../dbConnect.php';
	$db = dbAccess();

	$issue_id = htmlspecialchars($_POST['issue_id']);
	$statement = $db->prepare("DELETE FROM ISSUES WHERE ISSUE_ID = " . $issue_id);
	$statement->execute();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include '../dyno/head.php'; ?>
	</head>

	<body class="w3-black">

		<?php include '../dyno/navBar.php'; ?>

		<!-- MAIN CONTAINER -->
		<div class="w3-container w3-blue-gray w3-margin w3-padding-24">

			<!-- SECTION HEADING -->
			<div class="w3-row-padding w3-center w3-padding-16">
				<h1 class="shadow">EOS Issue Deleted!</h1>
			</div>

			<!-- ISSUES TABLE -->
			<div class="w3-responsive w3-text-black">
				<h3>Open Issues</h3>
				<table class="w3-table-all w3-hoverable w3-card-4">
					<tr class="w3-orange">
						<th>Department</th>
						<th>P#</th>
						<th>Issue</th>
						<th>Issue ID</th>
						<th>Submit Date</th>
						<th>Employee</th>
					</tr>
					<?php
						$statement = $db->prepare("SELECT * FROM ISSUES JOIN EMPLOYEES USING (EMPLOYEE_ID) JOIN DEPARTMENTS USING (DEPARTMENT_ID) ORDER BY PRIORITY_NUM ASC");
						$statement->execute();
						while($row = $statement->fetch(PDO::FETCH_ASSOC)){
							echo '<tr>';
								echo '<th>' . $row['function'] . '</th>';
								echo '<th>' . $row['priority_num'] . '</th>';
								echo '<th>' . $row['issue'] . '</th>';
								echo '<th>' . $row['issue_id'] . '</th>';
								echo '<th>' . $row['submit'] . '</th>';
								echo '<th>' . $row['first_name'] . ' ' . $row['last_name'] . '</th>';
							echo '</tr>';
						};
					?>
				</table>
			</div>

			<div class="w3-row-padding">
				<div class="w3-container w3-grey w3-padding-16 w3-center">
					<a href="iList.php" class="w3-button w3-orange w3-round-large w3-border w3-border-dark-gray w3-padding-large w3-ripple w3-xxlarge">Back To Issues</a>
				</div>
			</div>

		</div>

		<?php include '../dyno/footer.php'; ?>

	</body>
</html>