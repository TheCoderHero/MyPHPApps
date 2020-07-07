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
				<h1 class="shadow">L10 Meeting App</h1>
				<p class="subheading">efficient meetings every time!</p>
			</div>

			<div class="w3-container w3-orange w3-margin-top">
				<h2>Score Meeting</h2>
			</div>
			<form class="w3-container w3-grey">
				<label class="w3-text-orange"><b>Name</b></label>
				<input class="w3-input w3-border w3-light-grey" type="text">

				<label class="w3-text-orange"><b>Month</b></label>
				<input class="w3-input w3-border w3-light-grey" type="text">

				<label class="w3-text-orange"><b>Day</b></label>
				<input class="w3-input w3-border w3-light-grey" type="text">

				<label class="w3-text-orange"><b>Year</b></label>
				<input class="w3-input w3-border w3-light-grey" type="text">

				<label class="w3-text-orange"><b>Department</b></label>
				<select class="w3-select" name="department">
					<option value="" disabled selected>Department</option>
					<option value="1">Leadership</option>
					<option value="2">Operations</option>
					<option value="3">Information Technology</option>
					<option value="3">Telecommunications</option>
					<option value="3">Cabling</option>
					<option value="3">Sales</option>
					<option value="3">Engineering</option>
				</select>

				<h3>L10 Meeting Score</h3>
				<p>
					<input class="w3-radio" type="radio" name="lvl" value="1" checked>
					<label>1</label>
					<input class="w3-radio" type="radio" name="lvl" value="2">
					<label>2</label>
					<input class="w3-radio" type="radio" name="lvl" value="3">
					<label>3</label>
					<input class="w3-radio" type="radio" name="lvl" value="4">
					<label>4</label>
					<input class="w3-radio" type="radio" name="lvl" value="5">
					<label>5</label>
				</p>

				<input type="submit" class="w3-btn w3-orange w3-margin">
			</form>

		</div>

		<?php include '../dyno/footer.php'; ?>

	</body>
</html>