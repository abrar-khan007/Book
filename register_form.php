<link href="css/k.css" rel="stylesheet">
<link href="css/styl.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link type="text/css" rel="stylesheet" href="css/slick.css" />
<link type="text/css" rel="stylesheet" href="css/slick-theme.css" />
<link rel="stylesheet" href="css/font-awesome.min.css">
<link type="text/css" rel="stylesheet" href="css/accountbtn.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="js.php"></script>


<div class="wait overlay">
    <div class="loader"></div>
</div>

<!-- row -->
<div class="wrap-login100 login-pad2">

    <div class="login-marg">
        <!-- Billing Details -->
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8" id="signup_msg">
                <!--Alert from signup form-->
            </div>
            <div class="col-md-2"></div>
        </div>


        <!-- / Details -->

        <form id="signup_form" action="register.php" method="post">
            <div class="billing-details jumbotron">
                <div class="section-title">
                    <h2 class="login100-form-title p-b-49">Register Here</h2>
                </div>
                <div class="form-group ">
                    <input class="input form-control" type="text" name="f_name" id="f_name" placeholder="First Name">
                </div>
                <div class="form-group">
                    <input class="input form-control" type="text" name="l_name" id="l_name" placeholder="Last Name">
                </div>
                <div class="form-group">
                    <input class="input form-control" type="email" name="email" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input class="input form-control" type="password" name="password" id="password" placeholder="password">
                </div>
                <div class="form-group">
                    <input class="input form-control" type="password" name="repassword" id="repassword" placeholder="confirm password">
                </div>
                <div class="form-group">
                    <input class="input form-control" type="number" name="mobile" id="mobile" placeholder="mobile">
                </div>
                <div class="form-group">
                    <input class="input form-control" type="text" name="address1" id="address1" placeholder="Address">
                </div>
                <div class="form-group">
                    <input class="input form-control" type="text" name="address2" id="address2" placeholder="City">
                </div>
                <div class="form-group">
                    <input class="primary-btn btn-block" value="Sign Up" type="submit" name="signup">
                </div>
                <div class="text-pad">
                    <a href="login_form.php">
                        Already have an Account ?
                    </a>

                </div>



            </div>

        </form>



    </div>


</div>
<!-- /row -->