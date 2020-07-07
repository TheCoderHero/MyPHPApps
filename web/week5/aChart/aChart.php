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
			<div class="w3-row-padding w3-center">
				<h1 class="shadow highlight">Accountability Chart App</h1>
				<p class="subheading">the right person for the right seat!</p>
			</div>

			<div class="w3-row">
				<div class="w3-third w3-container">
				</div>

				<div class="w3-third">
					<div class="w3-card-4 w3-hover-shadow w3-round-large">
						<div class="w3-container w3-orange w3-center">
							<p class="shadow">Customer Service</p>
						</div>
						<div class="w3-container w3-light-gray w3-center">
							<p>Steve Sutton</p>
						</div>
						<div class="w3-container">
							<ul class="w3-ul w3-center">
								<li>Solve customer issues</li>
								<li>Document customer interactions</li>
								<li>Escalate when appropriate</li>
								<li>Open and clase customer accounts</li>
								<li>Generate sales leads</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="w3-rest">
				</div>
			</div>

		</div>


		<?php include '../dyno/footer.php'; ?>

	</body>
</html>