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
				<h2>Search For Employee</h2>
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

			<!--DIRECTORY TABLE-->
			<div class="w3-responsive w3-margin-top w3-text-black">
				<div id="table_id">
				</div>
			</div>

		</div>

		<?php include '../dyno/footer.php'; ?>

		<script>

			$(document).ready(function(){

				function fetch_data(){
					$.ajax({
						url: 'directData.php',
						method: 'POST',
						success: function(result){
							$('#table_id').html(result);
						}
					});
				}

				fetch_data();

				$(document).on('click', '#btn_add', function(){
					var fname = $('#f_name').text();
					var lname = $('#l_name').text();
					var email = $('#email').text();
					var dept = $('#department').val();
					var dataString = 'fname=' + fname + '&lname=' + lname + '&email=' + email + '&department=' + dept;
					if(fname == '' || lname == '' || email == '' || dept == '' ){
						alert("Please Fill In ALL Fields!");
						return false;
					}
					else {
						$.ajax({
							url: "processDirectInsert.php",
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
					var fname = $(this).closest('tr').find('.first_name').text();
					var lname = $(this).closest('tr').find('.last_name').text();
					var email = $(this).closest('tr').find('.email').text();
					var department = $(this).closest('tr').find(".department").val();
					var dataString = 'id=' + id + '&fname=' + fname + '&lname=' + lname + '&email=' + email + '&department=' + department;
					if(fname == '' || lname == '' || email == '' ){
						alert("Please Fill In ALL Fields!");
						return false;
					}
					else{
						if(confirm("Are you sure you want to update this employee?")){
							$.ajax({
								url: "processDirectUpdate.php",
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
					var dataString = 'id=' + id;
					if(confirm("Are you sure you want to delete this employee?")){
						$.ajax({
							url: "processDirectDelete.php",
							method: "POST",
							data: dataString,
							success: function(result){
								alert(result);
								fetch_data();
							}
						});
					}
				});

				$(document).on('click', '#btn_dept', function(){
					var department = $('#department').val();
					$.ajax({
						url: "processDirectSearchDepartment.php",
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
						url: "processDirectSearchLastName.php",
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