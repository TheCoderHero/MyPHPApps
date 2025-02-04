$(document).ready(function() {
  $.ajax({
    type:'post',
    url:'store_items.php',
    data:{ 
      total_cart_items:"totalitems"},
    success:function(response) {
      document.getElementById("total_items").value = response;
    }
  });
});

function cart(id) {
  var ele = document.getElementById(id);
  var img_src = ele.getElementsByTagName("img")[0].src;
  var name = document.getElementById(id + "_name").value;
  var price = document.getElementById(id + "_price").value;
  var number = document.getElementById(id + "_number").value;

  $.ajax({
    type:'post',
    url:'store_items.php',
    data:{
      item_src:img_src,
      item_name:name,
      item_price:price,
      item_number:number
    },
    success:function(response) {
      document.getElementById("total_items").value = response;
    }
  });
}

function show_cart() {
  $.ajax({
    type:'post',
    url:'store_items.php',
    data:{
      showcart:"cart"
    },
    success:function(response) {
      document.getElementById("mycart").innerHTML = response;
    }
  });
}

function confirm_cart() {
  $.ajax({
    type:'post',
    url:'store_items.php',
    data:{
      confirmcart:"cart"
    },
    success:function(response) {
      document.getElementById("mycart").innerHTML = response;
    }
  });
}

function totalPrice() {
  $.ajax({
    type:'post',
    url:'store_items.php',
    data:{
      total_price: 'price'
    },
    success:function(response) {
      var x = response * 160.00;
      document.getElementById("total_price").innerHTML = x;
    }
  });
}