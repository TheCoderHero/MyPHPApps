<?php
	session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include 'dyno/head.php'; ?>
	</head>

	<body class="w3-black">

		<!-- MAIN CONTAINER -->
		<div class="w3-container w3-blue-gray w3-margin w3-padding-24">
			<!-- SECTION 1 HEADING -->
			<div class="w3-row-padding w3-center w3-padding-24">
				<h1 class="shadow">EOS Tracker Application Sign-In</h1>
				<p class="subheading">keeping your applications safe and secure!</p>
			</div>

			<div class="w3-row-padding" id="display_id">
			</div>

			<div class="w3-row-padding">
				<div class="w3-col s12 w3-center" id="warning">
				</div>
			</div>

			<div class="w3-row w3-margin-top w3-center">
				<div class="w3-half w3-orange w3-center">
					<h2>Here By Mistake? Sign-Up Below</h2>
				</div>
			</div>
			<div class="w3-row">
				<div class="w3-half w3-center">
					<form class="w3-grey" action="signUp.php">
						<input type="submit" value="Sign-Up" class="w3-btn w3-orange w3-margin w3-round-large">
					</form>
				</div>
			</div>

		</div>
		<!-- MAIN CONTAINER END -->

		<?php include 'dyno/footer.php'; ?>

		<script>
			$(document).ready(function(){

				function fetch_data(){
					$.ajax({
						url: "signInData.php",
						method: "POST",
						success: function(result){
							$('#display_id').html(result);
						}
					});
				}

				fetch_data();

				$(document).on('click', '#submit_id', function(){
					var uname = $("#username_id").val();
					var pass = $("#pass_id").val();
					var dataString = 'uname1=' + uname + '&pass1=' + pass;
					if(uname == '' || pass == '')
						$("#warning").html('<h4 class="w3-margin-top" style="color: red;"><strong>Please Fill In All Fields!</strong></h4>');
					else 
					{
						$.ajax({
							type: "POST",
							url: "processSignIn.php",
							data: dataString,
							cache: false,
							success: function(login){
								if(login == "0"){
									alert("Username or Password is incorrect!");
								}
								else{
									alert("Sign-In Success!");
									//$("#warning").html('<a href="week7.php" class="w3-btn w3-orange w3-margin w3-round-large">Continue</a>');
									location.href="week7.php";
								}
							}
						});
					}
					return false;
				});

			});
		</script>

	</body>
</html>