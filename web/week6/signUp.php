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

			<div class="w3-row-padding w3-margin-top">

				<div class="w3-container w3-orange w3-margin-top" id="form_id">
					<h2>Fill In The Following: </h2>
				</div>
				<div class="w3-half">
					<label class="w3-text-orange"><b>Username</b></label>
					<input class="w3-input w3-border w3-light-grey" type="text" id="name_id">
				</div>
				<div class="w3-half" style="padding-left: 5px">
					<label class="w3-text-orange"><b>Password</b></label>
					<input class="w3-input w3-border w3-light-grey" type="password" id="pass_id">
				</div>
				<input type="button" class="w3-btn w3-orange w3-margin" id="signup" value="Submit">
			</div>
			<br>

			<div class="w3-row-padding w3-margin-top">
				<div class="w3-half" id="display_id">

				</div>
			</div>

			<div class="w3-row w3-margin-top w3-center">
				<div class="w3-half w3-orange w3-center">
					<h2>Here By Mistake? Sign-In Below</h2>
				</div>
			</div>
			<div class="w3-row">
				<div class="w3-half w3-center">
					<form class="w3-grey" action="signIn.php">
						<input type="submit" value="Sign-In" class="w3-btn w3-orange w3-margin w3-round-large">
					</form>
				</div>
			</div>

		</div>
		<!-- MAIN CONTAINER END -->

		<?php include 'dyno/footer.php'; ?>

		<script>

				$(document).ready(function(){
					$("#signup").click(function(){
						var name = $("#name_id").val();
						var pass = $("#pass_id").val();
						var dataString = 'name1=' + name + '&pass1=' + pass;
						if(name == '' || pass == ''){
							$("#display_id").html("Please Fill In All Fields");
						} else {
							$.ajax({
								type: "POST",
								url: "processSignUp.php",
								data: dataString,
								cache: false,
								success: function(login){
									if(login == "0")
										alert("That username is not available!");
									else{
										alert("Sign-Up Success!");
										location.href="signIn.php";
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