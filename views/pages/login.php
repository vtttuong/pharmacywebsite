<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo HOST;?>assets/css/login.css">
    <style>
        .success{border: solid 1px blue;}
        .error {border:solid 1px red;}
    </style>

  </head>

  <body>

    <div class="login">
        <div class="login-triangle"></div>
        
        <h2 class="login-header">Login</h2>

        <form class="login-container">
          <p><input type="username" placeholder="Username" name="username" data-require id="username"></p>
          <p><input type="password" placeholder="Password" name="password" data-require id="password"></p>
          <p><input type="submit" value="Log in" name="login"></p>
          <p><a href="<?php HOST;?>user/register">If you don't have account.Register</a></p>
        </form>
        
    </div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>  

    <script src="<?php echo HOST;?>assets/js/login.js"></script>
  </body>
</html>
