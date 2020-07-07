<?php
	session_start();
?>

<!DOCTYPE html>
	<html lang="en">
	<head>
		<?php include 'head.php' ?>
		<script type="text/javascript" src="cartJava.js"></script>
	</head>

	<body>
		<?php include 'navBar.php' ?>

		<!-- ITEM CONTAINER -->
		<div class="container-fluid top-element">
			<!-- HEADING ROW -->
			<div class="row">
				<div class="col-lg-12 text-center shopping-banner">
					<h2 class="highlight">Crazy Bonsai Products</h2>
					<p>Select Items For Purchase</p><br>
					<!-- CART BUTTON -->
					<p id="cart_button">
	  					<img src="http://icons.veryicon.com/png/System/Colorful%20Long%20Shadow/Cart.png" id="cartIcon">
	  					<input type="button" id="total_items" value="">
					</p>
					<!-- END CART BUTTON -->
				</div>
			</div>

			<!-- SALES ITEMS ROW 1 -->
			<div class="row row-centered">

				<div class="col-md-3 col-centered bonsai" id="item1">
					<h4>Fujian Tea Bonsai</h4>
					<p>Item # 1234</p>
					<p>Purchase Price: <span class="price">$160.00</span></p>
					<img class="item-picture" src="https://www.easternleaf.com/v/vspfiles/photos/801090-03-2.jpg"/><br>
					<input type="hidden" id="item1_name" value="Fujian Tea Bonsai">
					<input type="hidden" id="item1_price" value="160.00">
					<input type="hidden" id="item1_number" value="1234">
					<button class="cart-button"  type="button" onclick="itemAdded(); cart('item1');">ADD TO CART</button>
				</div>

				<div class="col-md-3 col-centered bonsai" id="item2">
					<h4>Mini Jade Bonsai</h4>
					<p>Item # 2345</p>
					<p>Purchase Price: <span class="price">$160.00</span></p>
					<img class="item-picture" src="https://cdn1.bigcommerce.com/server4100/6ys4nr/products/2883/images/6100/Dwarf_Jade_Bonsai_Tree_DJ09__26822.1429073185.500.750.jpg?c=2"/><br>
					<input type="hidden" id="item2_name" value="Mini Jade Bonsai">
					<input type="hidden" id="item2_price" value="160.00">
					<input type="hidden" id="item2_number" value="2345">
					<button class="cart-button"  type="button" onclick="itemAdded(); cart('item2');">ADD TO CART</button>
				</div>

				<div class="col-md-3 col-centered bonsai" id="item3">
					<h4>Mound Juniper Bonsai</h4>
					<p>Item # 3456</p>
					<p>Purchase Price: <span class="price">$160.00</span></p>
					<img class="item-picture" src="https://cdn1.bigcommerce.com/server4100/6ys4nr/products/2888/images/6106/Green_Mound_Juniper_Bonsai_Tree_GMJ08__87832.1429075503.500.750.jpg?c=2"/><br>
					<input type="hidden" id="item3_name" value="Mound Juniper Bonsai">
					<input type="hidden" id="item3_price" value="160.00">
					<input type="hidden" id="item3_number" value="3456">
					<button class="cart-button"  type="button" onclick="itemAdded(); cart('item3');">ADD TO CART</button>
				</div>

			</div>
			<!-- END ROW 1 -->

			<!-- SALES ITEMS ROW 2 -->
			<div class="row row-centered">

				<div class="col-md-3 col-centered bonsai" id="item4">
					<h4>Willow Leaf Bonsai</h4>
					<p>Item # 4567</p>
					<p>Purchase Price: <span class="price">$160.00</span></p>
					<img class="item-picture" src="https://cdn1.bigcommerce.com/server4100/6ys4nr/products/4739/images/18312/IMG_9533__73712.1530293392.500.750.JPG?c=2"/><br>
					<input type="hidden" id="item4_name" value="Willow Leaf Bonsai">
					<input type="hidden" id="item4_price" value="160.00">
					<input type="hidden" id="item4_number" value="4567">
					<button class="cart-button"  type="button" onclick="itemAdded(); cart('item4');">ADD TO CART</button>
				</div>

				<div class="col-md-3 col-centered bonsai" id="item5">
					<h4>Olive Bonsai</h4>
					<p>Item # 5678</p>
					<p>Purchase Price: <span class="price">$160.00</span></p>
					<img class="item-picture" src="https://www.easternleaf.com/v/vspfiles/photos/801230-02-2.jpg"/><br>
					<input type="hidden" id="item5_name" value="Olive Bonsai">
					<input type="hidden" id="item5_price" value="160.00">
					<input type="hidden" id="item5_number" value="5678">
					<button class="cart-button"  type="button" onclick="itemAdded(); cart('item5');">ADD TO CART</button>
				</div>

				<div class="col-md-3 col-centered bonsai" id="item6">
					<h4>Sego Palm Bonsai</h4>
					<p>Item # 6789</p>
					<p>Purchase Price: <span class="price">$160.00</span></p>
					<img class="item-picture" src="https://cdn7.bigcommerce.com/s-bhqinueo9m/products/14777/images/8154/sago-palm-medium-indoor-bonsai-dt8028sp__96200.1480631223.500.750.jpg?c=2"/><br>
					<input type="hidden" id="item6_name" value="Sego Palm Bonsai">
					<input type="hidden" id="item6_price" value="160.00">
					<input type="hidden" id="item6_number" value="6789">
					<button class="cart-button"  type="button" onclick="itemAdded(); cart('item6');">ADD TO CART</button>
				</div>

			</div>
			<!-- END SALES ITEMs ROW 2 -->

		</div> 
		<!-- END ITEM CONTAINER -->

		<!-- FORM BUTTONS -->
		<div class="row row-centered bottom-element">
			<div class="col-md-4 col-centered">
				<form action="view.php">
					<input type="submit" value="View Cart" class="btn">
				</form>
			</div>
		</div>
		<!-- END FORM BUTTONS -->

		<?php include 'footer.php' ?>
	</body>
</html>