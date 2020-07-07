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
				<h1 class="shadow">EOS Users Edit Table</h1>
				<p class="subheading">manage users rights the right way!</p>
			</div>

			<!-- ISSUES TABLE -->
			<div class="w3-row-padding">
				<div class="w3-col s12 w3-center w3-text-black">
					<h3 class="subheading">current users</h3>
				</div>
			</div>
			<div class="w3-responsive w3-text-black">
				<div id="user_table_id">
				</div>
			</div>
		</div>

		<?php include '../dyno/footer.php'; ?>

		<script>

			$(document).ready(function(){

				function fetch_data(){
					$.ajax({
						url: "userData.php",
						method: "POST",
						success: function(result){
							$('#user_table_id').html(result);
						}
					});
				}

				fetch_data();

				$(document).on('click', '#btn_add', function(){
					var uname = $('#user_name').text();
					var pass = $('#password').text();
					var access = $('#edit_access').text();
					var dataString = 'user1=' + uname + '&password1=' + pass + '&access1=' + access;
					if(uname == '' || access == '' ){
						alert("Please Fill In *Username - Password - Access* Fields!");
						return false;
					}
					else {
						$.ajax({
							url: "userInsert.php",
							method: "POST",
							data: dataString,
							success: function(result){
								alert(result);
								fetch_data();
							}
						});
					}
				});

				$(document).on('click', '.btn_upd', function()
				{
					var id = $(this).data("id5");
					var uname = $(this).closest('tr').find('.user_name').text();
					var pass = $(this).closest('tr').find('.password').text();
					var access = $(this).closest('tr').find('.edit_access').text();
					var dataString = 'id1=' + id + '&uname1=' + uname + '&pass1=' + pass + '&access1=' + access;
					if(uname == '' || pass == '' || access == '' )
					{
						alert("Please Fill In ALL Fields!");
						return false;
					}
					else
					{
						if(confirm("Are you sure you want to update this user?"))
						{
							$.ajax(
							{
								url: "userUpdate.php",
								method: "POST",
								data: dataString,
								success: function(result)
								{
									if(result == "1")
									{
										alert("User Updated!");
									}
									else
									{
										alert("Something went wrong! Try Again!");
									}
								}
							});
						}
					}
				});

				$(document).on('click', '.btn_del', function(){
					var user = $(this).closest('tr').find('.user_name').text();
					if(confirm("Are you sure you want to delete this user?")){
						$.ajax({
							url: "userDelete.php",
							method: "POST",
							data: {user:user},
							success: function(result){
								alert(result);
								fetch_data();
							}
						});
					}
				});

			});

		</script>

	</body>
</html>