<?php 
session_start();
  include_once 'class_user.php';
  $usern = new User();

  if (isset($_REQUEST['submit'])) {
    extract($_REQUEST);
      $login = $usern->check_login($user, $pass);
      if ($login) {
          $_SESSION['login'] = true;
          // Registration Success
         header("location:admin.php");
      } else {
          // Registration Failed
          echo 'Wrong username or password';
      }
  }
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="icon" href="assets/img/BrasaoPardilho_favIcon.png" type="image/png">

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Junta de Freguesia de Pardilhó</title>
<!--===============================================================================================-->  
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="assets/css/util.css">
  <link rel="stylesheet" type="text/css" href="assets/css/login.css">
  <link rel="stylesheet" href="assets/css/style.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
  
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <form class="login100-form validate-form">
          <span class="login100-form-title p-b-43">
            Área administrativa 
          </span>
          
          
          <div class="wrap-input100 validate-input">
            <input class="input100" type="text" id="user" name="user">
            <span class="focus-input100"></span>
            <span class="label-input100">Username</span>
          </div>
          
          
          <div class="wrap-input100 validate-input" data-validate="Password is required">
            <input class="input100" type="password" id="pass" name="pass">
            <span class="focus-input100"></span>
            <span class="label-input100">Password</span>
          </div>

          <div class="flex-sb-m w-full p-t-3 p-b-32">
            <div class="contact100-form-checkbox">
              <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
              <label class="label-checkbox100" for="ckb1">
                Lembra-me
              </label>
            </div>

          </div>
      

          <div class="container-login100-form-btn">
            <button class="login100-form-btn" type="submit" name="submit" id="signin" onclick="return(submitlogin());">
              Entrar
            </button>
          </div>

        </form>

        <div class="login100-more" style="background-image: url('assets/img/mlcpardilho.jpg');">
        </div>
      </div>
    </div>
  </div>
  

  <script>
      function submitlogin() {
        var form = document.login;
        if (form.user.value == "") {
          alert("Enter email or username.");
          return false;
        } else if (form.pass.value == "") {
          alert("Enter password.");
          return false;
        }
      }
      
    </script>
  

  
  
<!--===============================================================================================-->
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/daterangepicker/moment.min.js"></script>
  <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="assets/js/login.js"></script>

</body>
</html>