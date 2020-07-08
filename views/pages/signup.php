<!DOCTYPE html>
<html lang="en">
<head>
  <title>Create account</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="<?php echo HOST;?>assets/images/icons/favicon.ico"/>
<!--===============================================================================================-->
<!-- bootstrap core css -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo HOST;?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo HOST;?>assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo HOST;?>assets/vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="<?php echo HOST;?>assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo HOST;?>assets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo HOST;?>assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="<?php echo HOST;?>assets/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo HOST;?>assets/css/util.css">
  <link rel="stylesheet" type="text/css" href="<?php echo HOST;?>assets/css/signup.css">
<!--===============================================================================================-->

</head>


<body style="background-color: #666666;">
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">

        <form class="login100-form validate-form" action="" method="POST">
        <span class="login100-form-title p-b-32">
            Create account
          </span>
          <div class="wrap-input100 validate-input" data-validate="UserName is required">
            <input class="input100" type="text" name="username" id="username">
            <span class="focus-input100"></span>
            <span class="label-input100">UserName</span>
          </div>

          <div class="wrap-input100 validate-input" data-validate="Password is required">
            <input class="input100" type="password" name="password">
            <span class="focus-input100"></span>
            <span class="label-input100">Password</span>
          </div>
          <div class="wrap-input100 validate-input" data-validate="Name is required">
            <input class="input100" type="text" name="name">
            <span class="focus-input100"></span>
            <span class="label-input100">Name</span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <input class="input100" type="text" name="email">
            <span class="focus-input100"></span>
            <span class="label-input100">Email</span>
          </div>

          <div class="flex-sb-m w-full p-t-3 p-b-32" data-validate="Check is required">
            <div class="contact100-form-checkbox">
              <input class="input-checkbox100" id="ckb1" type="checkbox" name="agree">
              <label class="label-checkbox100" for="ckb1">
                I agree to the <a href="">Terms of User</a>
              </label>
            </div>

          </div>
          <div class="container-login100-form-btn">
            <input type="submit" name="submit" class="login100-form-btn" value="Create account">
          </div>
        </form>
        <div class="login100-more" style="background-image: url('<?php echo HOST;?>assets/images/bg-login.jpg');">
        </div>
      </div>
    </div>
  </div>
  

<!--===============================================================================================-->
  <script src="<?php echo HOST;?>assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo HOST;?>assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo HOST;?>assets/vendor/bootstrap/js/popper.js"></script>
  <script src="<?php echo HOST;?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo HOST;?>assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo HOST;?>assets/vendor/daterangepicker/moment.min.js"></script>
  <script src="<?php echo HOST;?>assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo HOST;?>assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="<?php echo HOST;?>assets/js/signup.js"></script>
</body>
</html>