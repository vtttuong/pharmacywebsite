<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login to countinue</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="<?php echo HOST;?>assets/images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo HOST;?>assets/vendor/bootstrap/css/bootstrap.min.css">
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
  <link rel="stylesheet" type="text/css" href="<?php echo HOST;?>assets/css/main.css">
<!--===============================================================================================-->
</head>
<!-- <?php 
  $loginCheck = $_SESSION['userlogin'];
  if ($loginCheck)
  {
    header('Location:'.HOST);
  }
  ?> -->
 <?php  
  if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])){
    $data = array();
    $data['password'] = isset($_POST['password']) ? $_POST['password'] : '';
    $data['username'] = isset($_POST['username']) ? $_POST['username'] : '';   
    $loginUser = $this->loginuser($data);
  }
?>

<body style="background-color: #666666;">
  
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <form class="login100-form validate-form" method="POST">
          <span class="login100-form-title p-b-43">
            Login to continue
          </span>
          
          <?php 
          if (isset($loginUser)){
          echo $loginUser; 
        }
        ?>
          
          <div class="wrap-input100 validate-input" data-validate = "Username is required">
            <input class="input100" type="text" name="username">
            <span class="focus-input100"></span>
            <span class="label-input100">Username</span>
          </div>
          
          
          <div class="wrap-input100 validate-input" data-validate="Password is required">
            <input class="input100" type="password" name="password">
            <span class="focus-input100"></span>
            <span class="label-input100">Password</span>
          </div>

          <div class="flex-sb-m w-full p-t-3 p-b-32">
            <div class="contact100-form-checkbox">
              <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
              <label class="label-checkbox100" for="ckb1">
                Remember me
              </label>
            </div>

            <div>
              <a href="#" class="txt1">
                Forgot Password?
              </a>
            </div>
          </div>
      

          <div class="container-login100-form-btn">
            <input type="submit" name="login" class="login100-form-btn" value="Login">
          </div>
          
          <div class="text-center p-t-46 p-b-20">
            <span class="txt2">

              or <a href="user/signup" class="txt2" style="font-size: 18px">Create account</a>
            </span>
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
  <script src="<?php echo HOST;?>assets/js/main.js"></script>

</body>
</html>