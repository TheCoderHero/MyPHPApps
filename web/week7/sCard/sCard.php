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
			<div class="w3-responsive w3-text-black" id="table_id">
			</div>

			<!--SEARCH FIELD-->
			<div class="w3-container w3-margin-top w3-orange">
				<h2>Search For Scorecard</h2>
			</div>
			<div class="w3-grey w3-container w3-padding-16">
				<div class="w3-row">
					<div class="w3-half w3-center">
						<p class="subheading">search by department</p>
					</div>
					<div class="w3-half w3-center">
						<p class="subheading">search by last name</p>
					</div>
				</div>
				<div class="w3-row">
					<div class="w3-col s6 w3-center" style= 'padding-right: 5px;'>
						<select class="w3-select" name="department" id="department">
                            <option value="" disabled selected>Department</option>
                            <option value="1">Leadership</option>
                            <option value="2">Operations</option>
                            <option value="3">Information Technology</option>
                            <option value="4">Telecommunications</option>
                            <option value="5">Cabling</option>
                            <option value="6">Sales</option>
                            <option value="7">Engineering</option>
                        </select>
					</div>
					<div class="w3-half w3-center" style= 'padding-left: 5px;'>
						<input class="w3-input w3-border w3-light-grey" id="l_name_search" placeholder="Last Name">
					</div>
				</div>
				<div class="w3-row">
					<div class="w3-col s3 w3-center">
						<button class="w3-button w3-orange" id="btn_dept" style="margin-top: 5px;">D-Search</button>
					</div>
					<div class="w3-col s3 w3-center">
						<button class="w3-button w3-orange" id="reset" style="margin-top: 5px;">Reset</button>
					</div>
					<div class="w3-col s3 w3-center">
						<button class="w3-button w3-orange" id="btn_name" style="margin-top: 5px;">LN-Search</button>
					</div>
					<div class="w3-col s3 w3-center">
						<button class="w3-button w3-orange" id="reset" style="margin-top: 5px;">Reset</button>
					</div>
				</div>
			</div>

		</div>

		<?php include '../dyno/footer.php'; ?>

		<script>

			$(document).ready(function(){

				function fetch_data(){
					$.ajax({
						url: 'sCardData.php',
						method: 'POST',
						success: function(result){
							$('#table_id').html(result);
						}
					});
				}

				fetch_data();

				$(document).on('click', '#btn_dept', function(){
					var department = $('#department').val();
					$.ajax({
						url: "sCardSearchDepartment.php",
						method: "POST",
						data: {department:department},
						success: function(result){
							$('#table_id').html(result);
						}
					});
				});

				$(document).on('click', '#btn_name', function(){
					var lname = $('#l_name_search').val();
					$.ajax({
						url: "sCardSearchName.php",
						method: "POST",
						data: {lname:lname},
						success: function(result){
							$('#table_id').html(result);
						}
					});
				});

				$(document).on('click', '#reset', function(){
					fetch_data();
				});

			});

		</script>

	</body>
</html>