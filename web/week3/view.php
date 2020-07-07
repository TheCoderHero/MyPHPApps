<?php
	session_start();
?>

<!DOCTYPE html>
	<html lang="en">
	<head>
		<?php include 'head.php' ?>
		<script type="text/javascript" src="cartJava.js"></script>
	</head>
	
	<body onload="show_cart(); totalPrice();">

		<?php include 'navBar.php' ?>

		<!-- ITEMS CONTAINER -->
		<div class="container top-element" id="shopping-cart">
			<!-- HEADING ROW -->
			<div class="row">
				<div class="col-lg-12 text-center shopping-banner">
					<h2 class="highlight">Crazy Bonsai Shopping Cart</h2>
					<p>Edit Quantities Below</p>
				</div>
			</div>
			<!-- END HEADING ROW -->
		</div>
		<!-- END ITEMS CONTAINER -->

		<!-- DISPLAY HEADING -->
		<div class="container-fluid">
			<div class="row row-centered form-container">
				<div class='col-sm-2 col-centered'>
					<p><strong>Remove Item</strong></p>
		        </div>
				<div class='col-sm-2 col-centered'>
					<p><strong>Item Image</strong></p>
		        </div>
		        <div class='col-sm-2 col-centered'>
					<p><strong>Item Name</strong></p>
		        </div>
		        <div class='col-sm-2 col-centered'>
					<p><strong>Item Number</strong></p>
		        </div>
		        <div class='col-sm-2 col-centered'>
					<p><strong>Item Price</strong></p>
		        </div>
			</div>
		</div>
		<!-- END DISPLAY HEADING -->

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
				<form action="browse.php" method="">
					<input type="submit" value="Browse Items" class="btn">
				</form>
			</div>
			<div class="col-md-4 col-centered">
				<form action="checkout.php" method="">
					<input type="submit" value="Checkout" class="btn">
				</form>
			</div>
		</div>
		<!-- END FORM BUTTONS -->

		<?php include 'footer.php' ?>
	</body>
</html>