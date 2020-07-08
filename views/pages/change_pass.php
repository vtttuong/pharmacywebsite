<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Đổi Mật Khẩu</title>
    <link rel="stylesheet" href="<?php echo HOST;?>assets/css/login.css">
    <style>
        .success{border: solid 1px blue;}
        .error {border:solid 1px red;}
    </style>
      <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>  
      <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>

  </head>

  <body>

    <div class="login">
        <div class="login-triangle"></div>
        
        <h2 class="login-header">Admin</h2>

        <form class="login-container" >
          <p><input type="password" placeholder="Mật Khẩu" name="password" id="password" data-require></p>
          <p><input type="password" placeholder="Mật Khẩu Mới" name="new_password" id="new_password" data-require></p>
          <p><input type="submit" value="Đổi Mật Khẩu" name="change_pass"></p>
        </form>
    </div>
    <script src="<?php echo HOST;?>assets/js/change_pass.js"></script>

  </body>
</html>
