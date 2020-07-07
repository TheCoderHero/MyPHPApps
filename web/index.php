<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include 'homeHead.php'; ?>
	</head>

	<body>

		<?php include 'homeNavBar.php'; ?>

		<!-- CAROUSEL -->
		<div id="carousel" class="carousel slide top-element" data-ride="carousel">
			<!-- INDICATORS -->
			<ol class="carousel-indicators">
				<li data-target="#carousel" data-slide-to="0" class="active"></li>
				<li data-target="#carousel" data-slide-to="1"></li>
				<li data-target="#carousel" data-slide-to="2"></li>
			</ol>

			<!-- WRAPPER FOR SLIDES -->
			<div class="carousel-inner">

				<div class="item active">
					<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1f/Elliott_State_Forest.jpg/1200px-Elliott_State_Forest.jpg" alt="Forest Scene">
					<div class="carousel-caption">
						<h3>I Love The Woods</h3>
						<p>Since I was a kid, I have always loved the quiet of the forest.</p>
					</div> <!-- END CAROUSEL CAPTION -->
				</div> <!-- END PICTURE ACTIVE-->

				<div class="item">
					<img src="http://greecegram.com/wp-content/uploads/2016/02/SAK_1271-1200x700.jpg" alt="Mountain">
					<div class="carousel-caption">
						<h3>My Second Love</h3>
						<p>My dream is to live at the foot of a mountain.</p>
					</div> <!-- END CAROUSEL CAPTION -->
				</div> <!-- END PICTURE -->

				<div class="item">
					<img src="http://www.tupperlake.com/f/blog/152images/Don%20-%20Fish%20Stocking/Beauty-of-Tupper-Lake.jpg" alt="Lake Shore">
					<div class="carousel-caption">
						<h3>Best Spot</h3>
						<p>I also want to live near a lake.</p>
					</div> <!-- END CAROUSEL CAPTION -->
				</div> <!-- END PICTURE -->

			</div> <!-- END WRAPPER -->

			<!-- CONTROLS -->
		    <a href="#carousel" class="left carousel-control" data-slide="prev">
		        <span class="glyphicon glyphicon-chevron-left"></span>
		    </a>
		    <a href="#carousel" class="right carousel-control" data-slide="next">
		        <span class="glyphicon glyphicon-chevron-right"></span>
		    </a>

		</div> 
		<!-- END CAROUSEL -->

		<!-- PERSONAL PICTURES -->
		<div class="black-background">
			<div class="container">
				<h3 class="text-center">PERSONAL PICTURES</h3>
				<div class="row text-center">

					<div class="col-sm-4">
						<div class="thumbnail">
							<img src="backyard.jpg" alt="Picture of John Tanner">
							<p><strong>Backyard</strong></p>
							<p>24 February 2013</p>
						</div>
					</div> <!-- END COLUMN -->

					<div class="col-sm-4">
						<div class="thumbnail">
							<img src="bobafet.jpg" alt="John Tanner and Boba Fett">
							<p><strong>Star Wars Night</strong></p>
							<p>19 September 2011</p>
						</div>
					</div> <!-- END COLUMN -->

					<div class="col-sm-4">
						<div class="thumbnail">
							<img src="iraq.jpg" alt="John Tanner in Iraq">
							<p><strong>Iraq</strong></p>
							<p>16 October 2008</p>
						</div>
					</div> <!-- END COLUMN -->
				</div> <!-- END ROW -->
			</div> <!-- END CONTAINER -->
		</div> 
		<!-- END PERSONAL PICTURES -->

		<!-- PERSONAL INTERESTS -->
		<div class="container text-center">
			<h3><strong>My Personal Interests!</strong></h3>
			<p>CLICK EACH PICTURE TO LEARN MORE...</p>
			<br>
			<div class="row">

				<div class="col-sm-4">
					<p class="text-center"><strong>Board Games</strong></p><br>
					<img src="games.jpg" class="img-circle icon" alt="Board Games">
					<button class="infoButton" onclick="showHide('info1');">Show/Hide</button>
					<div id="info1" style="visibility: hidden;">
						<p>Board Game Designer</p>
						<p>Dungeon Master</p>
						<p>Avid Game Collector</p>
					</div> <!-- END INFO -->
				</div> <!-- END COL_SM_4 -->

				<div class="col-sm-4">
					<p class="text-center"><strong>Programming</strong></p><br>
					<img src="code.jpg" class="img-circle icon" alt="Coding Buttons">
					<button class="infoButton" onclick="showHide('info2');">Show/Hide</button>
					<div id="info2" style="visibility: hidden;">
						<p>5 Years Experience</p>
						<p>C++ OOP Focused</p>
						<p>Simulation Theory</p>
					</div> <!-- END INFO2 -->
				</div> <!-- END COL_SM_4 -->

				<div class="col-sm-4">
					<p class="text-center"><strong>Religious Studies</strong></p><br>
					<img src="religion.jpg" class="img-circle icon" alt="Religious Symbols">
					<button class="infoButton" onclick="showHide('info3');">Show/Hide</button>
					<div id="info3" style="visibility: hidden;">
						<p>Intense Jewish Studies</p>
						<p>Harmony of Religion</p>
						<p>Seeker of Truth</p>
					</div> <!-- END INFO3 -->
				</div> <!-- END COL_SM_4 -->

			</div> <!-- END ROW -->
		</div> 
		<!-- END PERSONAL INTERESTS -->

		<?php include 'footer.php'; ?>

	</body>
</html>