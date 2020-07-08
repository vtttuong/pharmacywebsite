<!DOCTYPE html>
<html lang="en">
<head>
  <title>Create account</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="http://localhost:8080/weblayout/assets/images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="http://localhost:8080/weblayout/assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="http://localhost:8080/weblayout/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="http://localhost:8080/weblayout/assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="http://localhost:8080/weblayout/assets/vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="http://localhost:8080/weblayout/assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="http://localhost:8080/weblayout/assets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="http://localhost:8080/weblayout/assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="http://localhost:8080/weblayout/assets/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="http://localhost:8080/weblayout/assets/css/util.css">
  <link rel="stylesheet" type="text/css" href="http://localhost:8080/weblayout/assets/css/main.css">
<!--===============================================================================================-->

</head>

 <?php  
  if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
    $data = array();
    $data['email'] = isset($_POST['email']) ? $_POST['email'] : '';
    $data['password'] = isset($_POST['password']) ? $_POST['password'] : '';
    $data['username'] = isset($_POST['username']) ? $_POST['username'] : '';  
    $data['name'] = isset($_POST['name']) ? $_POST['name'] : '';  
    $insertUser = $this->insertuser($data);
  }
?>


<body style="background-color: #666666;">
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">

        <form class="login100-form validate-form" action="" method="POST">
        <span class="login100-form-title p-b-32">
            Create account
          </span>
        
        <?php 
          $alert = "<span class="."error"." style="."color:red"."> Đăng ký thành công</span>";
          if (isset($insertUser)){
          if ($insertUser==$alert) {$this->loginuser($data);}
          else
          echo $insertUser;
        
        }

         ?>
          
          <div class="wrap-input100 validate-input" data-validate="UserName is required">
            <input class="input100" type="text" name="username">
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

        <div class="login100-more" style="background-image: url('http://localhost:8080/weblayout/assets/images/bg-login.jpg');">
        </div>
      </div>
    </div>
  </div>
  
  

  
  
<!--===============================================================================================-->
  <script src="http://localhost:8080/weblayout/assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="http://localhost:8080/weblayout/assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="http://localhost:8080/weblayout/assets/vendor/bootstrap/js/popper.js"></script>
  <script src="http://localhost:8080/weblayout/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="http://localhost:8080/weblayout/assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="http://localhost:8080/weblayout/assets/vendor/daterangepicker/moment.min.js"></script>
  <script src="http://localhost:8080/weblayout/assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="http://localhost:8080/weblayout/assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="http://localhost:8080/weblayout/assets/js/main.js"></script>

</body>
</html>