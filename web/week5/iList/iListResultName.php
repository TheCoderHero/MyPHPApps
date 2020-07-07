<?php
	require '../dbConnect.php';
	$db = dbAccess();
	
	$para = htmlspecialchars($_POST['lname']);
	$para = strtolower($para);
	$para = ucwords($para);
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
				<h1 class="shadow">EOS Issues List Search Results</h1>
				<p class="subheading">search results by last name</p>
			</div>

			<!-- RESULTS TABLE -->
			<div class="w3-responsive w3-text-black">
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
						$query = "SELECT * FROM ISSUES JOIN EMPLOYEES USING (EMPLOYEE_ID) JOIN DEPARTMENTS USING (DEPARTMENT_ID) WHERE last_name = '" . $para . "' ORDER BY PRIORITY_NUM ASC";
						$statement = $db->prepare($query);
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

			<div class="w3-container w3-orange w3-margin-top">
				<h2>Submit A New Issue: </h2>
			</div>
			<form class="w3-container w3-grey w3-padding-16" action="iListInsert.php" method="post">
				<label class="w3-text-orange"><b>Issue</b></label>
				<input class="w3-input w3-border w3-light-grey" type="text" name="issue">
				<input type="submit" class="w3-btn w3-orange w3-margin">
			</form>

			<div class="w3-container w3-orange w3-margin-top">
				<h2>Update Issue: </h2>
			</div>
			<form class="w3-container w3-grey w3-padding-16" action="iListUpdate.php" method="post">
				<label class="w3-text-orange"><b>Enter Issue ID</b></label>
				<input class="w3-input w3-border w3-light-grey" type="text" name="issue_id">
				<label class="w3-text-orange"><b>Issue</b></label>
				<input class="w3-input w3-border w3-light-grey" type="text" name="issue">
				<input type="submit" class="w3-btn w3-orange w3-margin" value="Update">
			</form>

			<div class="w3-container w3-orange w3-margin-top">
				<h2>Remove Issue: </h2>
			</div>
			<form class="w3-container w3-grey w3-padding-16" action="iListDelete.php" method="post">
				<label class="w3-text-orange"><b>Enter Issue ID</b></label>
				<input class="w3-input w3-border w3-light-grey" type="text" name="issue_id">
				<input type="submit" class="w3-btn w3-orange w3-margin" value="Delete">
			</form>
		</div>

		<?php include '../dyno/footer.php'; ?>

	</body>
</html>