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
				<h1 class="shadow">Directory Search Results</h1>
			</div>

			<!-- RESULTS TABLE -->
			<div class="w3-responsive w3-text-black">
				<table class="w3-table-all w3-hoverable w3-card-4">
					<tr class="w3-orange">
						<th>First Name</th>
						<th>Last Name</th>
						<th>Email</th>
					</tr>
					<?php
						$query = "SELECT * FROM employees WHERE last_name = '" . $para . "' ORDER BY first_name ASC";
						$statement = $db->prepare($query);
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
		</div>

		<?php include '../dyno/footer.php'; ?>

	</body>
</html>