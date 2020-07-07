<?php
	require '../dbConnect.php';
	$db = dbAccess();
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
				<h1 class="shadow">EOS Issues List App</h1>
				<p class="subheading">deal with one thing at a time!</p>
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

			<div class="w3-container w3-margin-top w3-orange">
				<h2>Search For Issues</h2>
			</div>
			<form action = "iListResult.php" method="post" class="w3-grey w3-container w3-padding-16">
				<select class="w3-select" name="month">
					<option value="" disabled selected>By Month</option>
					<option value="1">January</option>
					<option value="2">February</option>
					<option value="3">March</option>
					<option value="4">April</option>
					<option value="5">May</option>
					<option value="6">June</option>
					<option value="7">July</option>
					<option value="8">August</option>
					<option value="9">September</option>
					<option value="10">October</option>
					<option value="11">November</option>
					<option value="12">December</option>
				</select>
				<input type="submit" class="w3-btn w3-orange w3-margin" value="Search">
			</form>

			<form action = "iListResultDepartment.php" method="post" class="w3-grey w3-container w3-padding-16">
				<select class="w3-select" name="department">
						<option value="" disabled selected>By Department</option>
						<option value="1">Leadership</option>
						<option value="2">Operations</option>
						<option value="3">Information Technology</option>
						<option value="4">Telecommunications</option>
						<option value="5">Cabling</option>
						<option value="6">Sales</option>
						<option value="7">Engineering</option>
				</select>
				<input type="submit" class="w3-btn w3-orange w3-margin" value="Search">
			</form>
			
			<form action = "iListResultName.php" method="post" class="w3-grey w3-margin-bottom w3-container w3-padding-16">
				<input class="w3-input w3-border w3-light-grey" type="text" name="lname" placeholder="By Last Name">
				<input type="submit" class="w3-btn w3-orange w3-margin" value="Search">
			</form>

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
				<label class="w3-text-orange"><b>Priority Number</b></label>
				<input class="w3-input w3-border w3-light-grey" type="text" name="priority_num">
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