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
				<h1 class="shadow">Company Directory</h1>
				<p class="subheading">finding the right people!</p>
			</div>

			<div class="w3-container w3-margin-top w3-orange">
				<h2>Search For Person</h2>
				<p class="subheading">search by last name!</p>
			</div>
			<form action = "directResult.php" method="post" class="w3-grey w3-margin-bottom w3-container">
				<label class="w3-text-orange"><b>Last Name</b></label>
				<input class="w3-input w3-border w3-light-grey" type="text" name="lname"><br>
				<input type="submit" class="w3-btn w3-orange w3-margin">
			</form>

			<!-- DIRECTORY TABLE -->
			<div class="w3-responsive w3-margin-top w3-text-black">
				<table class="w3-table-all w3-hoverable w3-card-4">
					<tr class="w3-orange">
						<th>First Name</th>
						<th>Last Name</th>
						<th>Email</th>
					</tr>
					<?php
						$statement = $db->prepare("SELECT * FROM EMPLOYEES ORDER BY LAST_NAME ASC");
						$statement->execute();
						while($row = $statement->fetch(PDO::FETCH_ASSOC)){
							echo '<tr>';
								echo '<th>' . $row['first_name'] . '</th>';
								echo '<th>' . $row['last_name'] . '</th>';
								echo '<th>' . $row['email'] . '</th>';
							echo '</tr>';
						};
					?>
				</table>
			</div>

			<div class="w3-container w3-orange w3-margin-top">
				<h2>Create New Employee</h2>
			</div>
			<form class="w3-container w3-grey">
				<label class="w3-text-orange"><b>First Name</b></label>
				<input class="w3-input w3-border w3-light-grey" type="text">

				<label class="w3-text-orange"><b>Last Name</b></label>
				<input class="w3-input w3-border w3-light-grey" type="text">

				<label class="w3-text-orange"><b>Email</b></label>
				<input class="w3-input w3-border w3-light-grey" type="text"><br>

				<input type="submit" class="w3-btn w3-orange w3-margin">
			</form>


		</div>

		<?php include '../dyno/footer.php'; ?>

	</body>
</html>