<?php
	require '../dbConnect.php';
	$db = dbAccess();
	$search = htmlspecialchars($_POST['department']);
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
				<h1 class="shadow">EOS Scorecard Search Result</h1>
			</div>

			<!-- RESULTS TABLE -->
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
						$query = "SELECT * FROM SCORECARD JOIN EMPLOYEES USING (EMPLOYEE_ID) INNER JOIN DEPARTMENTS ON SCORECARD.DEPARTMENT_ID=DEPARTMENTS.DEPARTMENT_ID WHERE DEPARTMENTS.DEPARTMENT_ID = " . $search . " ORDER BY DEPARTMENTS.DEPARTMENT_ID";
						$statement = $db->prepare($query);
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

		</div>

		<?php include '../dyno/footer.php'; ?>

	</body>
</html>