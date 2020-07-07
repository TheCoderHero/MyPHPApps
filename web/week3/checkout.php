<?php
	session_start();
?>

<!DOCTYPE html>
	<html lang="en">
	<head>
		<?php include 'head.php' ?>
	</head>

	<body>

		<?php include 'navBar.php' ?>

		<div class="container-fluid text-center top-element">
			<!-- HTML FORM ROW -->
			<div class="row text-center">
				<!-- FORM COLUMN -->
				<div class="col-lg-10 col-centered">
					<!-- FORM CONTAINER -->
					<div class="form-container">
						<!-- FORM -->
						<form action="confirm.php" id="purchaseForm" onsubmit="submitForm()" onreset="formAlert()" method="post">
							<!--COLUMN MARKER -->
							<div class="row row-centered">
								<!-- BILLING ADRESS COLUMN -->
								<div class="col-lg-5 col-centered">
									<h3>Billing Address</h3>
									<!-- NAME -->
									<label for="fname"><i class="fa fa-user"></i> Name <sp/><span class="warning" id="warning1">* Invalid | Required</span></label>
									<input oninput="regCreator(this.value, 'warning1', 1);" onfocus="background(this);" onblur="toUpper(this); removeBackground(this);" type="text" id="fname" name="fullname" placeholder="John M. Doe">

									<!-- PHONE -->
									<label for="phone"><i class="fa fa-envelope"></i> Phone Number <sp/><span class="warning" id="warning2">* Invalid | Required</span></label>
									<input oninput="regCreator(this.value, 'warning2', 2);" onfocus="background(this);" onblur="toUpper(this); removeBackground(this);" type="text" id="phone" name="phone" placeholder="123-456-7890">

									<!-- ADDRESS -->
									<label for="adr"><i class="fa fa-address-card-o"></i> Address <sp/><span class="warning" id="warning3">* Invalid | Required</span></label>
									<input oninput="regCreator(this.value, 'warning3', 3);" onfocus="background(this);" onblur="toUpper(this); removeBackground(this);" type="text" id="adr" name="address" placeholder="542 W. 15th Street">

									<!-- CITY -->
									<label for="city"><i class="fa fa-institution"></i> City <sp/><span class="warning" id="warning4">* Invalid | Required</span></label>
									<input oninput="regCreator(this.value, 'warning4', 4);" onfocus="background(this);" onblur="toUpper(this); removeBackground(this);" type="text" id="city" name="city" placeholder="Fresno">

									<!-- STATE ZIP ROW -->
									<div class="row row-centered">
										<div class="col-md-6 col-centered">
											<!-- STATE -->
											<label for="state"> State <sp/><span class="warning" id="warning5">* Invalid | Required</span></label>
											<input oninput="regCreator(this.value, 'warning5', 5);" onfocus="background(this);" onblur="toUpper(this); removeBackground(this);" type="text" id="state" name="state" placeholder="CA">
											</div>
											<div class="col-md-6 col-centered">
											<!-- ZIP CODE -->
											<label for="zip"> Zip <sp/><span class="warning" id="warning6">* Invalid | Required</span></label>
											<input oninput="regCreator(this.value, 'warning6', 6);" onfocus="background(this);" onblur="toUpper(this); removeBackground(this);" type="text" id="zip" name="zip" placeholder="90256">
										</div>
									</div>
									<!-- END STATE ZIP ROW -->
								</div>
								<!-- END BILLING ADDRESS COLUMN -->
							</div>
							<!-- END COLUMN MARKER -->

							<!-- FORM BUTTONS -->
							<div class="row row-centered">
								<div class="col-md-4 col-centered">
									<input type="submit" value="Confirm" class="btn">
								</div>
								<div class="col-md-4 col-centered">
									<input type="button" onclick="resetForm()" value="Reset" class="btn">
								</div>
							</div>
							<!-- END FORM BUTTONS -->
						</form>
						<!-- END FORM -->
					</div>
					<!-- END FORM CONTAINER -->
				</div>
				<!-- END FORM COLUMN -->
			</div>
			<!-- END HTML FORM ROW -->
		</div> 
		<!-- END ITEM CONTAINER -->

		<?php include 'footer.php' ?>
	</body>
</html>