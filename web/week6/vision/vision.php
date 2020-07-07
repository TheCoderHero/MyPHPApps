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
				<h1 class="shadow">EOS Vision Tracker App</h1>
				<p class="subheading">catch the vision for the future!</p>
			</div>
			<hr>

			<!-- CORE VALUES -->
			<div class="w3-cell-row">
				<div class="w3-container w3-orange w3-cell w3-center" style="width: 25%">
					<h2 class="shadow">Core Values</h2>
				</div>

				<div class="w3-container w3-cell" style="width: 75%">
					<ol>
						<?php
							foreach($db->query('SELECT core_value FROM core_values') as $row){
								echo '<li>' . $row['core_value'] . '</li>';
							}
						?>
					</ol>
				</div>
			</div>
			<hr>

			<!-- CORE FOCUS -->
			<div class="w3-cell-row">
				<div class="w3-container w3-orange w3-cell w3-center" style="width: 25%">
					<h2 class="shadow">Core Focus</h2>
				</div>
				<div class="w3-container w3-cell" style="width: 75%">
					<p>Passion: <?php
							$statement = $db->prepare("SELECT passion FROM core_focus");
							$statement->execute();
							while($row = $statement->fetch(PDO::FETCH_ASSOC))
								echo $row['passion'];
						?>
					</p>
					<p>Niche: 
						<?php
							$statement = $db->prepare("SELECT niche FROM core_focus");
							$statement->execute();
							while($row = $statement->fetch(PDO::FETCH_ASSOC))
								echo $row['niche'];
						?>
					</p>
				</div>
			</div>
			<hr>

			<!-- 10 YEAR TARGET -->
			<div class="w3-cell-row">
				<div class="w3-container w3-cell w3-orange w3-center" style="width: 25%">
					<h2 class="shadow">10 Year Target</h2>
				</div>
				<div class="w3-container w3-cell" style="width: 75%">
					<p><?php
							$statement = $db->prepare("SELECT * FROM ten_year_target");
							$statement->execute();
							while($row = $statement->fetch(PDO::FETCH_ASSOC))
								echo "Future Date: " . $row['future'];
								echo $row['vision'];
						?>
					</p>
				</div>
			</div>
			<hr>

			<!-- MARKETING STRATEGY -->
			<div class="w3-cell-row">
				<div class="w3-container w3-orange w3-cell w3-center" style="width: 25%">
					<h2 class="shadow">Marketing Strategy</h2>
				</div>
				<div class="w3-container w3-cell" style="width: 75%">
					<p>Target Market: 
						<?php
							foreach($db->query("SELECT target_market FROM marketing") as $row){
								echo $row['target_market'];
							}
						?>
					</p>
					<p>Three Uniques:
						<ol>
							<?php
								foreach($db->query('SELECT unique1, unique2, unique3 FROM marketing') as $row){
									echo '<li>' . $row['unique1'] . '</li>';
									echo '<li>' . $row['unique2'] . '</li>';
									echo '<li>' . $row['unique3'] . '</li>';
								}
							?>
						</ol>
					</p>
					<p>Proven Process:
						<?php
							foreach($db->query("SELECT proven_process FROM marketing") as $row){
								echo $row['proven_process'];
							}
						?>
					</p>
					<p> Guarantee:
						<?php
							foreach($db->query('SELECT guarantee FROM marketing') as $row){
								echo $row['guarantee'];
							}
						?>
					</p>
				</div>
			</div>
			<hr>

			<!-- 3 YEAR PICTURE -->
			<div class="w3-cell-row">
				<div class="w3-container w3-orange w3-cell w3-center" style="width: 25%">
					<h2 class="shadow">3 Year Picture</h2>
				</div>
				<div class="w3-container w3-cell" style="width: 75%">
					<p>Future Date:
						<?php
							foreach($db->query('SELECT future FROM three_year_picture') as $row){
								echo $row['future'];
							}
						?>
					</p>
					<p>Revenue: $ 
						<?php
							foreach($db->query('SELECT revenue FROM three_year_picture') as $row){
								echo $row['revenue'] . " Million";
							}
						?>
					</p>
					<p>Profit: $
						<?php
							foreach($db->query('SELECT profit FROM three_year_picture') as $row){
								echo $row['profit'] . " Million";
							}
						?>
					</p>
					<p>Measurable: 
						<?php
							foreach($db->query('SELECT measurable FROM three_year_picture') as $row){
								echo $row['measurable'];
							}
						?>
					</p>
					<p>What does it look like:
						<ul>
							<?php
								foreach($db->query('SELECT vision FROM three_year_visions') as $row){
									echo '<li>' . $row['vision'] . '</li>';
								}
							?>
						</ul>
					</p>
				</div>
			</div>
			<hr>

			<!-- 1 YEAR PLAN -->
			<div class="w3-cell-row">
				<div class="w3-container w3-orange w3-cell w3-center" style="width: 25%">
					<h2 class="shadow">1 Year Plan</h2>
				</div>
				<div class="w3-container w3-cell" style="width: 75%">
					<p>Future Date:
						<?php
							foreach($db->query('SELECT future FROM one_year_plan') as $row){
								echo $row['future'];
							}
						?>
					</p>
					<p>Revenue: $ 
						<?php
							foreach($db->query('SELECT revenue FROM one_year_plan') as $row){
								echo $row['revenue'] . " Million";
							}
						?>
					</p>
					<p>Profit: $
						<?php
							foreach($db->query('SELECT profit FROM one_year_plan') as $row){
								echo $row['profit'] . " Thousand";
							}
						?>
					</p>
					<p>Measurable: 
						<?php
							foreach($db->query('SELECT measurable FROM one_year_plan') as $row){
								echo $row['measurable'];
							}
						?>
					</p>
					<p>Goals For The Year:
						<ol>
							<?php
								foreach($db->query('SELECT goal FROM one_year_goals') as $row){
									echo '<li>' . $row['goal'] . '</li>';
								}
							?>
						</ol>
					</p>
				</div>
			</div>
			<hr>

			<!-- QUARTER ROCKS -->
			<div class="w3-cell-row">
				<div class="w3-container w3-orange w3-cell w3-center" style="width: 25%">
					<h2 class="shadow">Quarter Rocks</h2>
				</div>
				<div class="w3-container w3-cell" style="width: 75%">
					<p>Future Date:
						<?php
							foreach($db->query('SELECT future FROM quarter_rocks') as $row){
								echo $row['future'];
							}
						?>
					</p>
					<p>Revenue: $ 
						<?php
							foreach($db->query('SELECT revenue FROM quarter_rocks') as $row){
								echo $row['revenue'] . " Million";
							}
						?>
					</p>
					<p>Profit: $
						<?php
							foreach($db->query('SELECT profit FROM quarter_rocks') as $row){
								echo $row['profit'] . " Thousand";
							}
						?>
					</p>
					<p>Measurable: 
						<?php
							foreach($db->query('SELECT measurable FROM quarter_rocks') as $row){
								echo $row['measurable'];
							}
						?>
					</p>
					<p>Rocks For The Quarter:
						<ol>
							<?php
								foreach($db->query('SELECT rock FROM rocks') as $row){
									echo '<li>' . $row['rock'] . '</li>';
								}
							?>
						</ol>
					</p>
				</div>
			</div>
			<hr>

		</div>

		<?php include '../dyno/footer.php'; ?>

	</body>
</html>