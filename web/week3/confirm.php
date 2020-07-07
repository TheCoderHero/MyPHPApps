<?php  
	session_start();
?>

<!DOCTYPE html>
	<html lang="en">
	<head>
		<?php include 'head.php' ?>
		<script type="text/javascript" src="cartJava.js"></script>
	</head>
	
	<body onload="confirm_cart(); totalPrice();">

		<?php include 'navBar.php' ?>

		<?php 
			$name = htmlspecialchars($_POST['fullname']);
			$phone = htmlspecialchars($_POST['phone']);
			$address = htmlspecialchars($_POST['address']);
			$city = htmlspecialchars($_POST['city']);
			$state = htmlspecialchars($_POST['state']);
			$zip = htmlspecialchars($_POST['zip']);
		?>

		<!-- CONFIRM INFO -->
		<div class="container-fluid text-center top-element">
			<!-- HTML DIPLAY ROW -->
			<div class="row text-center">
				<!-- DISPLAY COLUMN -->
				<div class="col-lg-10 col-centered">
					<!-- DISPLAY CONTAINER -->
					<div class="form-container">
						<!-- INFO ROW -->
						<div class="row row-centered">
							<!-- INFO -->
							<div class="col-lg-8 col-centered">
								<h3>Billing Address</h3>
								<p><strong>Name:</strong> <?=$name ?></p>
								<p><strong>Phone:</strong> <?=$phone ?></p>
								<p><strong>Address:</strong> <?=$address ?></p>
								<p><strong>City:</strong> <?=$city ?></p>
								<p><strong>State:</strong> <?=$state ?> 
								<p><strong>Zip:</strong> <?=$zip ?></p>
							</div>
							<!-- END INFO -->
							<!-- DISPLAY ITEMS -->
							<div class="col-lg-10 col-centered">
								<!-- AD ITEMS HERE -->
							</div>
						</div>
						<!-- END INFO ROW -->
					</div>
					<!-- END DISPLAY CONTAINER -->
				</div>
				<!-- END DISPLAY COLUMN -->
			</div>
			<!-- END HTML DIPLAY ROW -->
		</div>
		<!-- END CONFIRM INFO -->

		<!-- CART DISPLAY -->
		<div id="mycart">
		</div>
		<!-- END CART DISPLAY -->

		<!-- DISPLAY HEADING -->
		<div class="container-fluid">
			<div class="row row-centered form-container">
				<div class='col-sm-2 col-centered'>
					<span id="space"></span>
		        </div>
				<div class='col-sm-2 col-centered'>
					<span id="space"></span>
		        </div>
		        <div class='col-sm-2 col-centered'>
					<span id="space"></span>
		        </div>
		        <div class='col-sm-2 col-centered'>
					<span id="space"></span>
		        </div>
		        <div class='col-sm-2 col-centered'>
					<p><strong>Total Price: $ <span id="total_price"></span>.00</strong></p>
		        </div>
			</div>
		</div>
		<!-- END DISPLAY HEADING -->

		<!-- FORM BUTTONS -->
		<div class="row row-centered bottom-element">
			<div class="col-md-4 col-centered">
				<a href="week3.php"><button type="button" class="btn" onclick="resetSession();">HOME</button></a>
			</div>
		</div>
		<!-- END FORM BUTTONS -->

		<?php include 'footer.php' ?>
	</body>
</html>