<!DOCTYPE html>
	<html lang="en">
	<head>
		<?php include 'head.php'; ?>
	</head>

	<body>
		<?php include 'navBar.php'; ?>

		<!-- BONSAI TREES -->
		<div class="container text-center">
			<h3><strong>Crazy Bonsai!</strong></h3>
			<p>CLICK EACH PICTURE TO LEARN MORE...</p>
			<br>
			<div class="row">

				<div class="col-sm-4">
					<p class="text-center"><strong>Cherry Blossom</strong></p><br>
					<img src="https://cdn.shopify.com/s/files/1/2939/1328/products/product-image-721770622_compact.jpg?v=1534109823" class="img-circle icon" alt="Cherry Blossom">
					<button class="infoButton" onclick="showHide('info1')">Show/Hide</button>
					<div id="info1" style="visibility: hidden;">
						<p>Genus "<i>Prunus serrulata</i>"</p>
						<p>National Flower</p>
						<p>Symbolizes Clouds</p>
					</div> <!-- END INFO -->
				</div> <!-- END COL_SM_4 -->

				<div class="col-sm-4">
					<p class="text-center"><strong>Japanese Maple</strong></p><br>
					<img src="https://thumbs.dreamstime.com/t/japanese-maple-acer-palmatum-bonsai-isolated-white-57261071.jpg" class="img-circle icon" alt="Japanese Maple">
					<button class="infoButton" onclick="showHide('info2')">Show/Hide</button>
					<div id="info2" style="visibility: hidden;">
						<p>Genus "<i>Acer palmatum</i>"</p>
						<p>Cultivated since 1800s</p>
						<p>High Art of Oriental Gardens</p>
					</div> <!-- END INFO2 -->
				</div> <!-- END COL_SM_4 -->

				<div class="col-sm-4">
					<p class="text-center"><strong>Juniper Bonsai</strong></p><br>
					<img src="http://www.stormthecastle.com/bonsai/images/chinese-elm-1.jpg" class="img-circle icon" alt="Juniper Bonsai">
					<button class="infoButton" onclick="showHide('info3')">Show/Hide</button>
					<div id="info3" style="visibility: hidden;">
						<p>Genus "<i>Juniperus</i>"</p>
						<p>Used in Essential Oils</p>
						<p>Most Popular Conifer</p>
					</div> <!-- END INFO3 -->
				</div> <!-- END COL_SM_4 -->

			</div> <!-- END ROW -->
		</div> 
		<!-- END PERSONAL INTERESTS -->

		<!-- FORM BUTTONS -->
		<form action="browse.php">
			<div class="row row-centered">
				<div class="col-md-4 col-centered">
					<input type="submit" value="Browse Items" class="btn">
				</div>
			</div>
		</form>
		<!-- END FORM BUTTONS -->

		<?php include 'footer.php'; ?>
	</body>
</html>