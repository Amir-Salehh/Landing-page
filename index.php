<?php

require_once ('database/database-pdo.php');

?>


<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOGIN</title>
</head>

<body>
  <div class="container" id="container">
    <div class="form-container sign-up">
      <form method="post" action="actions/sign_up.php">
        <h1>Create Account</h1>
        <div class="social-icons">
          <a href="#" class="icons"><i class="fa-brands fa-google-plus-g"></i></a>
          <a href="#" class="icons"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#" class="icons"><i class="fa-brands fa-github"></i></a>
          <a href="#" class="icons"><i class="fa-brands fa-linkedin-in"></i></a>
        </div>
        <span>or use your email to registration</span>
        <input type="text" placeholder="User-Name" name="username">
        <input type="email" placeholder="Email" name="email">
          <input type="text" placeholder="Phone Number" name="phone">
        <input type="password" placeholder="Password" name="password">
        <button type="submit" name="signup">Sign Up</button>
        <?php if(isset($_GET['sign-up-empty'])){ ?>
          <p style="width:100%" class="alert alert-danger" >Please fill in all fields.</p>
        <?php }if(isset($_GET['submit'])){ ?>
          <p style="width:100%" class="alert alert-success" >Welcome to our site.</p>
        <?php } ?>
      </form>
    </div>
    <div class="form-container sign-in">
        <form method="post" action="actions/sign_in.php">
        <h1>Sign In</h1>
        <div class="social-icons">
          <a href="#" class="icons"><i class="fa-brands fa-google-plus-g"></i></a>
          <a href="#" class="icons"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#" class="icons"><i class="fa-brands fa-github"></i></a>
          <a href="#" class="icons"><i class="fa-brands fa-linkedin-in"></i></a>
        </div>
        <span>or use your email/password</span>
        <input type="text" placeholder="Email / Mobile / username" name="key">
        <input type="password" placeholder="Password" name="password">
        <a href="OTP/otp-email.php">Forget your Password?</a>
            <button type="submit" name="sign_in">SignIn</button>
           <?php if(isset($_GET['sign-in-empty'])){ ?>
                <p style="width:100%" class="alert alert-danger" >Please fill in all fields.</p>
           <?php } if(isset($_GET['notUser'])){ ?>
                <p style="width:100%" class="alert alert-danger" >user not found.</p>
            <?php } elseif(isset($_GET['findUser'])){?>
                <p style="width:100%" class="alert alert-success" >Login to website.</p>
            <?php } ?>
      </form>
    </div>
    <div class="toggle-container">
      <div class="toggle">
        <div class="toggle-panel toggle-left">
          <h1>Welcome Back!</h1>
          <p>Enter your Personal details to use all of site features</p>
          <button type="submit" class="hidden" id="login">Sign In</button>
        </div>
        <div class="toggle-panel toggle-right">
          <h1>Hello, Friend!</h1>
          <p>Register with your Personal details to use all of site features</p>
          <button class="hidden" id="register" type="submit">Sign Up</button>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="assets/js/Script/script.js"></script>
</html>
