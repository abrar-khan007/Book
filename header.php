<?php
@session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <title> Book Store</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

  <!-- bootstrap -->
  <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />


  <link type="text/css" rel="stylesheet" href="css/slick.css" />
  <link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

  <!-- nouislider -->
  <link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

  <!-- Font Awesome Icon -->
  <link rel="stylesheet" href="css/font-awesome.min.css">

  <!-- stlylesheet -->
  <link type="text/css" rel="stylesheet" href="css/styl.css" />
  <link type="text/css" rel="stylesheet" href="css/accountbtn.css" />








  <style>
    a {
      color: rgba(240, 20, 161, 1);
      font-weight: 600;
      font-size: 15px;
      font-style: normal;
      font-variant: normal;
      font-family: Oswald;
      transition: 0.4s color;
    }

    a:hover,
    a:focus {
      color: rgb(41, 5, 20);
      text-decoration: none;
      font-weight: 600;
      font-size: 15px;
      font-style: normal;
      font-variant: normal;
      font-family: Oswald;
      outline: none;
      transition: 0.4s color
    }


    #navigation {
      background: #FF4E50;

      background: linear-gradient(-137deg, #0c1425 0%, #271706 20%, #462f2a 40%, #582508 60%, #648f98 80%, #150f07 100%);
      border-bottom: 2px solid #170303;
      border-top: 3px solid #170303;

    }

    #header {

      background: rgb(57, 32, 51);
      background: -webkit-linear-gradient(to right, rgb(81, 42, 14), rgb(48, 42, 11));
      background: linear-gradient(to right, rgb(81, 42, 14), rgb(58, 42, 11));


    }

    #top-header {


      background: rgb(28, 32, 51);
      background: -webkit-linear-gradient(to right, rgb(28, 32, 51), rgb(68, 42, 11));
      background: linear-gradient(to right, rgb(28, 32, 51), rgb(68, 42, 11));


    }

    #footer {
      background: #7474BF;
      background: -webkit-linear-gradient(to right, rgb(81, 52, 14), rgb(48, 42, 11));
      background: linear-gradient(to right, rgb(78, 32, 51), #7474BF);
      transition: 0.5s all;

      color: #c0d044;
    }

    #footer:hover {
      background: #7474BF;
      background: -webkit-linear-gradient(to right, rgb(81, 52, 14), rgb(48, 42, 11));
      background: linear-gradient(to right, rgb(78, 32, 51), #7474BF);
      transition: 0.5s all;

      color: Cyan;
    }

    #bottom-footer {
      background: #c0d044;
      /* fallback for old browsers */
      background: -webkit-linear-gradient(to right, rgb(78, 32, 51), #252525);
      background: linear-gradient(to right, rgb(78, 32, 51), #252526);
      transition: 0.5s all;

    }

    .footer-links li a {
      color: snow;
      transition: 0.3s all;
    }

    .footer-links li a:hover {
      color: teal;
      transition: 0.3s all;
    }

    .mainn-raised {

      margin: -7px 0px 0px;
      border-radius: 6px;
      box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);

    }

    .glyphicon {
      display: inline-block;
      font: normal normal normal 14px/1 FontAwesome;
      font-size: inherit;
      text-rendering: auto;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }

    .glyphicon-chevron-left:before {
      content: "\f053"
    }

    .glyphicon-chevron-right:before {
      content: "\f054"
    }
  </style>

</head>

<body>
  <!-- HEADER -->
  <header>
    <!-- TOP HEADER -->
    <div id="top-header">
      <div class="container">
        <ul class="header-links pull-left">
          <li>
            <ul>
              <li style="background-color:silver;color:black;">


              </li>
            </ul>
        </ul>
        <ul class="header-links pull-right">

          <li><?php
              include "db.php";
              if (isset($_SESSION["uid"])) {
                $sql = "SELECT first_name FROM user_info WHERE user_id='$_SESSION[uid]'";
                $query = mysqli_query($con, $sql);
                $row = mysqli_fetch_array($query);

                echo '
                               <div class="dropdownn">
                                  <a href="#" class="dropdownn" data-toggle="modal" data-target="#myModal" ><i class="fa fa-user-o"></i> Hello' . $row["first_name"] . '</a>
                                  <div class="dropdownn-content">
                                    
                                    <a href="logout.php"  ><i class="fa fa-sign-in" aria-hidden="true"></i>Log out</a>
                                    
                                  </div>
                                </div>';
              } else {
                echo '
                                <div class="dropdownn">
                                  <a href="#" class="dropdownn" data-toggle="modal" data-target="#myModal" ><i class="fa fa-user-o"></i> My Account</a>
                                  <div class="dropdownn-content">
                                    <a href="" data-toggle="modal" data-target="#Modal_login"><i class="fa fa-sign-in" aria-hidden="true" ></i>Login</a>
                                    <a href="" data-toggle="modal" data-target="#Modal_register"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a>
                                    
                                  </div>
                                </div>';
              }
              ?>


          </li>


        </ul>
        

      </div>
    </div>
    </div>
    <!-- /TOP HEADER -->


    <!-- MAIN HEADER -->
    <div id="header">


      <!-- container -->
      <div class="container">
        <!-- row -->
        <div class="row">
          
          <!-- LOGO -->
          <div class="col-md-3">
            <div class="header-logo">
              <a href="index.php" class="logo">
                <font style="font-style:normal; font-size: 33px;color: aliceblue;font-family: serif">
                  Book Store App
                </font>

              </a>
            </div>
          </div>
          <!-- /LOGO -->
          <div class="col-md-3 clearfix">

<!--Pending -->

<!-- Cart -->
<div class="dropdown" style="margin-left:900px;">
  <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
    <i class="fa fa-shopping-cart"></i>
    <span>Your Cart</span>
    <div class="badge qty">0</div>
  </a>
  <div class="cart-dropdown">
    <div class="cart-list" id="cart_product">


    </div>

    <div class="cart-btns">
      <a href="cart.php">View Cart</a>
      <a href="checkout.php">Checkout <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>

</div>
<!-- /Cart -->

</div>

        </div>
      </div>
      <!-- /ACCOUNT -->
    </div>
    <!-- row -->
    </div>
    <!-- container -->
    </div>
    <!-- /MAIN HEADER -->
  </header>
  <!-- /HEADER -->


  <!-- NAVIGATION -->

  <div class="modal fade" id="Modal_login" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>

        </div>
        <div class="modal-body">
          <?php
          include "login_form.php";

          ?>

        </div>

      </div>

    </div>
  </div>
  <div class="modal fade" id="Modal_register" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>

        </div>
        <div class="modal-body">
          <?php
          include "register_form.php";

          ?>

        </div>

      </div>

    </div>
  </div>