<?php
  session_start();

  if(isset($_POST['reset'])) {
    session_destroy();
    exit();
  }

  if(isset($_POST['total_price'])) {
    echo count($_SESSION['name']);
    exit();
  }

  if(isset($_POST['total_cart_items'])) {
	 echo count($_SESSION['name']);
	 exit();
  }

  if(isset($_POST['item_src'])) {
    $_SESSION['name'][]=$_POST['item_name'];
    $_SESSION['price'][]=$_POST['item_price'];
    $_SESSION['src'][]=$_POST['item_src'];
    $_SESSION['number'][]=$_POST['item_number'];
    echo count($_SESSION['name']);
    exit();
  }

  if(isset($_POST['showcart'])) {
    for($i=0;$i<count($_SESSION['src']);$i++) {
      echo "<div class='row row-centered'>";
        echo "<div class='col-sm-2 col-centered cart_items'>";
          echo "<button type='button' onlick='removeItem();'>Remove</button>";
        echo "</div>";
        echo "<div class='col-sm-2 col-centered cart_items'>";
          echo "<img src='".$_SESSION['src'][$i]."'>";
        echo "</div>";
        echo "<div class='col-sm-2 col-centered cart_items'>";
          echo "<p>". $_SESSION['name'][$i] . "</p>";
        echo "</div>";
        echo "<div class='col-sm-2 col-centered cart_items'>";
          echo "<p>" . $_SESSION['number'][$i] . "</p>";
        echo "</div>";
        echo "<div class='col-sm-2 col-centered cart_items'>";
          echo "<p>$" . $_SESSION['price'][$i] . "</p>";
        echo "</div>";
      echo "</div>";
    }
    exit();
  }

  if(isset($_POST['confirmcart'])) {
    for($i=0;$i<count($_SESSION['src']);$i++) {
      echo "<div class='row row-centered'>";
        echo "<div class='col-sm-2 col-centered cart_items'>";
          echo "<img src='".$_SESSION['src'][$i]."'>";
        echo "</div>";
        echo "<div class='col-sm-2 col-centered cart_items'>";
          echo "<p>". $_SESSION['name'][$i] . "</p>";
        echo "</div>";
        echo "<div class='col-sm-2 col-centered cart_items'>";
          echo "<p>" . $_SESSION['number'][$i] . "</p>";
        echo "</div>";
        echo "<div class='col-sm-2 col-centered cart_items'>";
          echo "<p>$" . $_SESSION['price'][$i] . "</p>";
        echo "</div>";
      echo "</div>";
    }
    exit();
  }
?>