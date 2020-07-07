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
				<h1 class="shadow">EOS Scorecard App</h1>
				<p class="subheading">honest reports for honest business!</p>
			</div>

			<!-- SCORECARD TABLE -->
			<div class="w3-responsive w3-text-black">
				<table class="w3-table-all w3-hoverable w3-card-4">
					<tr class="w3-orange">
						<th>Dept</th>
						<th>Employee</th>
						<th>Measurable</th>
						<th>Goal</th>
						<th>Date</th>
						<th>Update</th>
					</tr>
					<?php
						$statement = $db->prepare("SELECT * FROM scorecard JOIN DEPARTMENTS USING (DEPARTMENT_ID) JOIN EMPLOYEES USING (EMPLOYEE_ID) ORDER BY date ASC");
						$statement->execute();
						while($row = $statement->fetch(PDO::FETCH_ASSOC)){
							echo '<tr>';
								echo '<th>' . $row['function'] . '</th>';
								echo '<th>' . $row['first_name'] . ' ' . $row['last_name'] . '</th>';
								echo '<th>' . $row['measurable'] . '</th>';
								echo '<th>' . $row['goal'] . '</th>';
								echo '<th>' . $row['date'] . '</th>';
								echo '<th>' . $row['update'] . '</th>';
							echo '</tr>';
						};
					?>
				</table>
			</div>

			<div class="w3-container w3-margin-top w3-orange">
				<h2>Search For Scorecard By Department</h2>
			</div>
			<form action = "sCardResult.php" method="post" class="w3-grey w3-container w3-padding-16">
				<select class="w3-select" name="department">
					<option value="" disabled selected>Department</option>
					<option value="1">Leadership</option>
					<option value="2">Operations</option>
					<option value="3">Information Technology</option>
					<option value="4">Telecommunications</option>
					<option value="5">Cabling</option>
					<option value="6">Sales</option>
					<option value="7">Engineering</option>
				</select><br>
				<input type="submit" class="w3-btn w3-orange w3-margin">
			</form>

		</div>

		<?php include '../dyno/footer.php'; ?>

	</body>
</html>