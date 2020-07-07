<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include 'dyno/head.php'; ?>
	</head>

	<body class="w3-black">

		<?php include 'dyno/navBar.php'; ?>

		<!-- MAIN CONTAINER -->
		<div class="w3-container w3-blue-gray w3-margin-top-16" id="app_buttons">
		</div>

		<div class="w3-container w3-blue-gray w3-margin w3-padding-24">
			<!-- SECTION 2 HEADING -->
			<div class="w3-row w3-padding-24">
				<div class="w3-col s12">
					<h1 class="shadow highlight"><strong>EOS Tracker Application Description</strong></h1>
				</div>
			</div>

			<!-- VISION APP DESCRIPTION -->
			<div class="w3-row">
				<div class="w3-col s3 w3-center w3-padding-24">
					<a href="vision/vision.php" class="w3-button w3-orange w3-round-large w3-border w3-border-dark-gray w3-padding-large w3-ripple w3-xxlarge navButton"><i class="fas fa-glasses"></i></a>
				</div>
				<div class="w3-col s9">
					<p>The <span class="highlight"><strong>Vision Tracker App</strong></span> allows management to edit the company's vision. Employees can also view the company's vision for the future. This ensures the entire organization is focused on making the vision a reality!</p>
				</div>
			</div>
			<hr>

			<!-- ISSUES APP DESCRIPTION -->
			<div class="w3-row">
				<div class="w3-col s3 w3-center w3-padding-24">
					<a href="iList/iList.php" class="w3-button w3-orange w3-round-large w3-border w3-border-dark-gray w3-padding-large w3-ripple w3-xxlarge navButton"><i class="fas fa-list-ol"></i></a>
				</div>
				<div class="w3-col s9">
					<p>The <span class="highlight"><strong>Issues List App</strong></span> allows employees to add issues to the organization's issues list. It also allows employees to view current issues and management to prioritize issues for the next L10 Meeting. Employees can search for issues by month, department, or last name assignment.</p>
				</div>
			</div>
			<hr>

			<!-- SCORECARD APP DESCRIPTION -->
			<div class="w3-row">
				<div class="w3-col s3 w3-center w3-padding-24">
					<a href="sCard/sCard.php" class="w3-button w3-orange w3-round-large w3-border w3-border-dark-gray w3-padding-large w3-ripple w3-xxlarge navButton"><i class="fas fa-list-alt"></i></a>
				</div>
				<div class="w3-col s9">
					<p>The <span class="highlight"><strong>Scorecard App</strong></span> shows the department scorecards. Scorecards track individual progress on goals specified by management. It also allows management to make updates on scorecard progression. Employees can search for scorecards based on department.</p>
				</div>
			</div>
			<hr>

			<!-- DIRECTORY APP DESCRIPTION -->
			<div class="w3-row">
				<div class="w3-col s3 w3-center w3-padding-24">
					<a href="direct/direct.php" class="w3-button w3-orange w3-round-large w3-border w3-border-dark-gray w3-padding-large w3-ripple w3-xxlarge navButton"><i class="fas fa-phone-square"></i></a>
				</div>
				<div class="w3-col s9">
					<p>The <span class="highlight"><strong>Directory App</strong></span> allows employees to search for contact email for other employees in the company. Search by last name and department!</span></p>
				</div>
			</div>

		</div>
		<!-- MAIN CONTAINER END -->

		<?php include 'dyno/footer.php'; ?>

		<script>
			$(document).ready(function(){

				function fetch_data(){
					$.ajax({
						url: "week7Data.php",
						method: "POST",
						success: function(result){
							$('#app_buttons').html(result);
						}
					});
				}

				fetch_data();
			});
		</script>

	</body>
</html>