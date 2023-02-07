$(document).ready(function () {
  cat();
  cathome();

  function cat() {
    $.ajax({
      url: "action.php",
      method: "POST",
      data: { category: 1 },
      success: function (data) {
        $("#get_category").html(data);
      },
    });
  }

  function cathome() {
    $.ajax({
      url: "show_book.php",
      method: "POST",
      data: { categoryhome: 1 },
      success: function (data) {
        $("#get_category_home").html(data);
      },
    });
  }

  /*window.location is 
	used to redirect user from home page to profile.php page
*/
  $("#login").on("submit", function (event) {
    event.preventDefault();
    $(".overlay").show();
    $.ajax({
      url: "login.php",
      method: "POST",
      data: $("#login").serialize(),
      success: function (data) {
        if (data == "login_success") {
          window.location.href = "index.php";
        } else {
          $("#e_msg").html(data);
          $(".overlay").hide();
        }
      },
    });
  });

  //Get User Information before checkout
  $("#signup_form").on("submit", function (event) {
    event.preventDefault();
    $(".overlay").show();
    $.ajax({
      url: "register.php",
      method: "POST",
      data: $("#signup_form").serialize(),
      success: function (data) {
        $(".overlay").hide();
        if (data == "register_success") {
          window.location.href = "cart.php";
        } else {
          $("#signup_msg").html(data);
        }
      },
    });
  });

  //Add Product into Cart End Here
  //Count user cart items funtion
  count_item();
  function count_item() {
    $.ajax({
      url: "action.php",
      method: "POST",
      data: { count_item: 1 },
      success: function (data) {
        $(".badge").html(data);
      },
    });
  }
  //Count user cart items funtion end

  //Fetch Cart item from Database to dropdown menu
  getCartItem();
  function getCartItem() {
    $.ajax({
      url: "action.php",
      method: "POST",
      data: { Common: 1, getCartItem: 1 },
      success: function (data) {
        $("#cart_product").html(data);
        net_total();
      },
    });
  }

  //Fetch Cart item from Database to dropdown menu

  $("body").delegate(".qty", "keyup", function (event) {
    event.preventDefault();
    var row = $(this).parent().parent();
    var price = row.find(".price").val();
    var qty = row.find(".qty").val();
    if (isNaN(qty)) {
      qty = 1;
    }
    if (qty < 1) {
      qty = 1;
    }
    var total = price * qty;
    row.find(".total").val(total);
    var net_total = 0;
    $(".total").each(function () {
      net_total += $(this).val() - 0;
    });
    $(".net_total").html("Total : $ " + net_total);
  });
  //Change Quantity end here

  /*
		whenever user click on .remove class 
	*/
  $("body").delegate(".update", "click", function (event) {
    var update = $(this).parent().parent().parent();
    var update_id = update.find(".update").attr("update_id");
    var qty = update.find(".qty").val();
    $.ajax({
      url: "action.php",
      method: "POST",
      data: { updateCartItem: 1, update_id: update_id, qty: qty },
      success: function (data) {
        $("#cart_msg").html(data);
        checkOutDetails();
      },
    });
  });

  $("#search_btn").click(function () {
    $("#get_product").html("<h3>Loading...</h3>");
    var keyword = $("#search").val();
    if (keyword != "") {
      $.ajax({
        url: "action.php",
        method: "POST",
        data: { search: 1, keyword: keyword },
        success: function (data) {
          $("#get_product").html(data);
          if ($("body").width() < 480) {
            $("body").scrollTop(683);
          }
        },
      });
    }
  });
});
