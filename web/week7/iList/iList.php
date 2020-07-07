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
				<div id="table_id">
				</div>
			</div>

			<div class="w3-container w3-margin-top w3-orange">
				<h2>Search For Issues</h2>
			</div>
			<div class="w3-grey w3-container w3-padding-16">
				<div class="w3-row">
					<div class="w3-half w3-center">
						<p class="subheading">search by month</p>
					</div>
					<div class="w3-half w3-center">
						<p class="subheading">search by last name</p>
					</div>
				</div>
				<div class="w3-row">
					<div class="w3-col s6 w3-center" style= 'padding-right: 5px;'>
						<select class="w3-select" name="month" id="month">
							<option value="" disabled selected>By Month</option>
							<option value="7">July</option>
							<option value="8">August</option>
							<option value="9">September</option>
							<option value="10">October</option>
						</select>
					</div>
					<div class="w3-half w3-center" style= 'padding-left: 5px;'>
						<input class="w3-input w3-border w3-light-grey" id="l_name_search" placeholder="Last Name">
					</div>
				</div>
				<div class="w3-row">
					<div class="w3-col s3 w3-center">
						<button class="w3-button w3-orange" id="btn_month" style="margin-top: 5px;">M-Search</button>
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
						url: "iListData.php",
						method: "POST",
						success: function(result){
							$('#table_id').html(result);
						}
					});
				}

				fetch_data();

				$(document).on('click', '#btn_add', function(){
					var priority = $('#priority_id').text();
					var issue = $('#new_issue_id').text();
					var fName = $('#f_name_id').text();
					var lName = $('#l_name_id').text();
					var dataString = 'priority1=' + priority + '&issue1=' + issue + '&fname1=' + fName + '&lname1=' + lName;
					if(priority == '' || issue == '' || fName == '' || lName == ''){
						alert("Please Fill In *Priority - Issue - First Name - Last Name* Fields!");
						return false;
					}
					else {
						$.ajax({
							url: "iListInsert.php",
							method: "POST",
							data: dataString,
							success: function(result){
								alert(result);
								fetch_data();
							}
						});
					}
				});

				$(document).on('click', '.btn_upd', function(){
					var id = $(this).data("id6");
					var priority = $(this).closest('tr').find('.priority_num').text();
					var issue = $(this).closest('tr').find('.edit_issue').text();
					var fName = $(this).closest('tr').find('.f_name').text();
					var lName = $(this).closest('tr').find('.l_name').text();
					var dataString = 'id1=' + id + '&priority1=' + priority + '&issue1=' + issue + '&fname1=' + fName + '&lname1=' + lName;
					if(priority == '' || issue == ''){
						alert("Please Fill In Fields: P# - Issue!");
						return false;
					}
					else{
						if(confirm("Are you sure you want to update this issue?")){
							$.ajax({
								url: "iListUpdate.php",
								method: "POST",
								data: dataString,
								success: function(result){
									alert(result);
									fetch_data();
								}
							});
						}
					}
				});

				$(document).on('click', '.btn_del', function(){
					var id = $(this).data("id1");
					if(confirm("Are you sure you want to delete this issue?")){
						$.ajax({
							url: "iListDelete.php",
							method: "POST",
							data: {id:id},
							success: function(result){
								alert(result);
								fetch_data();
							}
						});
					}
				});

				$(document).on('click', '#btn_month', function(){
					var month = $('#month').val();
					$.ajax({
						url: "iListResultMonth.php",
						method: "POST",
						data: {month:month},
						success: function(result){
							$('#table_id').html(result);
						}
					});
				});

				$(document).on('click', '#btn_name', function(){
					var lname = $('#l_name_search').val();
					$.ajax({
						url: "iListResultName.php",
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