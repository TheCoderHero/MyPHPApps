<?php

	session_start();

	$access = $_SESSION['id'];

	if($access == "2"){
		echo '<div class="w3-row-padding w3-center w3-padding-24">';
			echo '<h1 class="shadow">EOS Tracker Applications</h1>';
			echo '<p class="subheading">Everything you need to track EOS</p>';
		echo '</div>';

		echo '<div class="w3-row-padding w3-margin-top">';
			echo '<div class="w3-col s3 w3-center w3-padding-24">';
				echo '<a href="vision/vision.php" class="w3-button w3-orange w3-round-large w3-border w3-border-dark-gray w3-padding-large w3-ripple w3-xxlarge navButton"><i class="fas fa-glasses"></i></a>';
				echo '<p class="shadow">Vision Tracker</p>';
			echo '</div>';

			echo '<div class="w3-col s3 w3-center w3-padding-24">';
				echo '<a href="iList/iList.php" class="w3-button w3-orange w3-round-large w3-border w3-border-dark-gray w3-padding-large w3-ripple w3-xxlarge navButton"><i class="fas fa-list-ol"></i></a>';
				echo '<p class="shadow">Issues List</p>';
			echo '</div>';

			echo '<div class="w3-col s3 w3-center w3-padding-24">';
				echo '<a href="sCard/sCard.php" class="w3-button w3-orange w3-round-large w3-border w3-border-dark-gray w3-padding-large w3-ripple w3-xxlarge navButton"><i class="fas fa-list-alt"></i></a>';
				echo '<p class="shadow">Scorecard</p>';
			echo '</div>';

			echo '<div class="w3-col s3 w3-center w3-padding-24">';
				echo '<a href="direct/direct.php" class="w3-button w3-orange w3-round-large w3-border w3-border-dark-gray w3-padding-large w3-ripple w3-xxlarge navButton"><i class="fas fa-phone-square"></i></a>';
				echo '<p class="shadow">Directory</p>';
			echo '</div>';
		echo '</div>';
	}
	else if($access == "1"){
		echo '<div class="w3-row-padding w3-center w3-padding-24">';
			echo '<h1 class="shadow">EOS Tracker Applications</h1>';
			echo '<p class="subheading">Everything you need to track EOS</p>';
		echo '</div>';

		echo '<div class="w3-row">';

			echo '<div class="w3-col s1 w3-container"></div>';

			echo '<div class="w3-col s2 w3-center w3-padding-24">';
				echo '<a href="vision/vision.php" class="w3-button w3-orange w3-round-large w3-border w3-border-dark-gray w3-padding-large w3-ripple w3-xxlarge navButton"><i class="fas fa-glasses"></i></a>';
				echo '<p class="shadow">Vision Tracker</p>';
			echo '</div>';

			echo '<div class="w3-col s2 w3-center w3-padding-24">';
				echo '<a href="iList/iList.php" class="w3-button w3-orange w3-round-large w3-border w3-border-dark-gray w3-padding-large w3-ripple w3-xxlarge navButton"><i class="fas fa-list-ol"></i></a>';
				echo '<p class="shadow">Issues List</p>';
			echo '</div>';

			echo '<div class="w3-col s2 w3-center w3-padding-24">';
				echo '<a href="sCard/sCard.php" class="w3-button w3-orange w3-round-large w3-border w3-border-dark-gray w3-padding-large w3-ripple w3-xxlarge navButton"><i class="fas fa-list-alt"></i></a>';
				echo '<p class="shadow">Scorecard</p>';
			echo '</div>';

			echo '<div class="w3-col s2 w3-center w3-padding-24">';
				echo '<a href="direct/direct.php" class="w3-button w3-orange w3-round-large w3-border w3-border-dark-gray w3-padding-large w3-ripple w3-xxlarge navButton"><i class="fas fa-phone-square"></i></a>';
				echo '<p class="shadow">Directory</p>';
			echo '</div>';

			echo '<div class="w3-col s2 w3-center w3-padding-24">';
				echo '<a href="users/usersEdit.php" class="w3-button w3-orange w3-round-large w3-border w3-border-dark-gray w3-padding-large w3-ripple w3-xxlarge navButton"><i class="fas fa-plus-circle"></i></i></a>';
				echo '<p class="shadow">Edit Users</p>';
			echo '</div>';

			echo '<div class="w3-col s1 w3-container"></div>';

		echo '</div>';
	}
	else {
		echo "Oops! Something Went Wrong!";
	}

?>