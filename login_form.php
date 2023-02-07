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



        <form action="login.php" id="login" method="POST" class="login100-form ">
            <div class="billing-details jumbotron">
                <div class="section-title">
                    <h2 class="login100-form-title p-b-49">Login Here</h2>
                </div>


                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="input" type="email" name="email" placeholder="Email" id="password" required>
                </div>

                <div class="form-group">
                    <label for="email">Password</label>
                    <input class="input" type="password" name="password" placeholder="password" id="password" required>
                </div>
               
                <div class="text-pad">
                    <a href="login.php">
                        forget password ?
                    </a>

                </div>

                <input class="primary-btn btn-block" name='submit'  type="submit" Value="Login">

                <div class="panel-footer">
                    <div class="alert alert-danger">
                        <h4 id="e_msg"></h4>
                    </div>
                </div>





            </div>

        </form>

    </div>

</div>