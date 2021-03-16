<?php
  session_start();
  $notif = null;
  include_once("includes/config.php");

  if (!empty($_SESSION)) {
    if ($_SESSION['login'] == "masuk") {
      header("Location: dashboard.php");
    }
    
  }else{
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      $username = $_POST['username'];
      $password = $_POST['password'];
      if ($username == "admin" && $password == "admin") {
        $_SESSION['login'] = "masuk";
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
      }else{
        $notif = "<small style='color: red;'>Username atau password yang dimasukan salah!</small>";
      }
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/favicons/favicon-16x16.png">
    <link rel="manifest" href="../assets/favicons/site.webmanifest">
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>Control Panel</h1>
      </div>
      <div class="login-box">
        <form class="login-form" method="POST" action="">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
          <?php 
            if (!empty($notif)) {
              echo $notif;
            }
          ?>
          <div class="form-group">
            <label class="control-label">Username</label>
            <input autocomplate="off" required name="username" class="form-control" type="text" placeholder="Username" autofocus>
          </div>
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            <input autocomplate="off" required name="password" class="form-control" type="password" placeholder="Password">
          </div>
          
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>LOGIN</button>
          </div>
        </form>
      </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="assets/js/plugins/pace.min.js"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
    </script>
  </body>
</html>